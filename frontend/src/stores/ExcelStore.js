import { reactive } from 'vue'
import * as XLSX from 'xlsx'
import CryptoJS from 'crypto-js'
import {defineStore} from "pinia";

export const useExcelDataStore = defineStore('excelDataStore', {
    state: () => ({
        tableData: [],
        isLoading: false,
        isUploading: false,
        progress: 0,
        uploadedFileHash: null
    }),

    getters: {
      getTableData: (state) => state.tableData,
    },

    actions: {
        handleFileUpload(event) {
            const file = event.target.files[0]
            if (!file) return

            const reader = new FileReader();

            reader.onprogress = (event) => {
                if (event.lengthComputable) {
                    this.isUploading = true
                    this.progress = Math.round((event.loaded / event.total) * 100)
                }
            }

            reader.onload = () => {
                const data = new Uint8Array(reader.result)
                const hash = CryptoJS.SHA256(data).toString()

                if (hash === this.uploadedFileHash) {
                    alert('You have already uploaded this file.')
                    return
                }

                this.isLoading = true
                this.isUploading = false
                this.progress = 0

                setTimeout(() => {
                    const workbook = XLSX.read(data, { type: 'array' })
                    const sheetNameList = workbook.SheetNames
                    const worksheet = workbook.Sheets[sheetNameList[0]]
                    const sheet_array = XLSX.utils.sheet_to_json(worksheet, { header: 1 })

                    let sheetData = {};
                    const _cols = sheet_array.shift();
                    for(let rowIdx in sheet_array){
                        let _row = sheet_array[rowIdx];
                        let _key = _row[0];
                        if(!_key){
                            continue;
                        }
                        if(!sheetData[_key]){
                            sheetData[_key] = []
                        }
                        if(_row.join("") === ""){
                            continue
                        }

                        //
                        let plainValues = {};
                        for(let colIdx in _cols){
                            let myCell = _row[colIdx];
                            let colName = _cols[colIdx];
                            if(!myCell){
                                continue;
                            }
                            if(myCell.text){
                                plainValues[colName] = myCell.text();
                            }else{
                                plainValues[colName] = myCell;
                            }
                        }
                        sheetData[_key] = plainValues;
                    }


                    console.log('Sheet data:', JSON.stringify(sheet_array, null, 2), 'Calls:', _cols);
                    this.tableData = sheetData;
                    // this.tableData = tableData
                    this.uploadedFileHash = hash
                    this.isLoading = false
                }, 1000)
            }

            reader.readAsArrayBuffer(file)
        },
    }
});

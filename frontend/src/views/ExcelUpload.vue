<template>
    <div>
        <input type="file" @change="handleFileUpload">
        <div v-if="isUploading" class="progress-bar" :style="{ width: progress + '%' }"></div>
        <table v-if="tableData?.length > 0">
            <thead>
            <tr>
                <th v-for="header in tableData[0]" :key="header">{{ header }}</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="row in tableData" :key="JSON.stringify(row)">
                <td v-for="value in row">{{ value }}</td>
            </tr>
            </tbody>
        </table>
        <div v-else-if="isLoading">
            Loading...
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import {useExcelDataStore} from "@/stores";

export default defineComponent({
    name: 'ExcelUpload',
    setup() {
        const { tableData, isLoading, isUploading, progress, handleFileUpload } = useExcelDataStore();

        return {
            tableData,
            isLoading,
            isUploading,
            progress,
            handleFileUpload
        }
    }
})
</script>

<style>
.progress-bar {
    height: 20px;
    background-color: #e0e0e0;
    transition: width 0.3s ease-in-out;
}
</style>

<template>
    <h2>Ngo list</h2>
    <div class=" flex items-center gap-[18px] flex-wrap">
        <div class="flex items-center px-4 h-12 bg-Light-cyan border-0.5 border-green rounded-xl">
            <option class="mr-2 text-green text-base leading-5" value="">All User</option>
            <img src="./images/icons/arrow-down-green.png" alt="arrow icon">
        </div>
        <h4 class="text-gray-secondary">467k Users</h4>
        <div class=" sm:ml-auto">
            <form class="flex items-center relative">
                <div class="">
                    <input class=" bg-white border-input-w-border border rounded-xl px-4 pr-3.5 pl-9 h-12 max-w-[116px] transition focus:outline-none focus:bg-white placeholder:pt-1" type="search" placeholder="Search" aria-label="Search">
                </div>
                <button class="w-5 absolute left-3 md:left-3 top-1/2 -translate-y-2/4" type="submit">
                    <img src="./images/icons/search-icon.svg" alt="search icon">
                </button>
            </form>
        </div>
        <div>
            <a href="index.html" class="group flex items-center px-6 h-12 bg-white border-0.5 border-green text-green transition-all duration-500 hover:text-white hover:bg-green rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20" class=" w-5 h-6 mr-2">
                    <path fill="currentcolor" fill-rule="evenodd" d="m9.153 14.64 2.842-2.87a.75.75 0 0 0-.01-1.06.73.73 0 0 0-1.04 0l-1.574 1.6V7.49a.737.737 0 1 0-1.475 0v4.82l-1.574-1.6a.73.73 0 0 0-1.04 0 .76.76 0 0 0 0 1.06l2.832 2.87a.768.768 0 0 0 .525.22.768.768 0 0 0 .515-.22Zm7.175-7.614c.233-.003.486-.006.717-.006.257 0 .455.2.455.45v8.04c0 2.48-2 4.49-4.455 4.49H5.173C2.59 20 .5 17.89.5 15.29V4.51C.5 2.03 2.49 0 4.965 0h5.287c.248 0 .456.21.456.46v3.22c0 1.83 1.485 3.33 3.307 3.34.418 0 .793.003 1.12.006.253.002.478.004.672.004.14 0 .324-.002.521-.004Zm.277-1.46c-.813.003-1.773 0-2.463-.007-1.095 0-1.997-.91-1.997-2.017V.906c0-.43.518-.645.813-.334l2.916 3.062 1.071 1.125a.477.477 0 0 1-.34.807Z" clip-rule="evenodd" />
                </svg>
                <span class="text-current text-base leading-5 ">Export</span>
            </a>
        </div>
        <div class="">
            <a href="./add-new-user.html" class="group text-white  flex items-center px-4 h-12 bg-green border-0.5 border-green rounded-xl transition-all duration-500 hover:bg-white hover:text-green">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.01" fill="currentcolor" />
                    <path d="M18.0114 12.0019H6" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.0065 6V18" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <option class="text-base leading-5" value="">Add New User</option>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "NgoList.vue"
}
</script>

<style scoped>

</style>

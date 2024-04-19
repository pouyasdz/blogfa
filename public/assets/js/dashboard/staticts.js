const aside = document.querySelector("#sidebar");
const sidebarData = [
    {
        title:"داشبورد",
        icon:"ri-home-line",
        link:"/",
    },
    {
        title:"مدریت حساب ها",
        icon:"ri-group-line",
        link:"/",
    },
    {
        title:"مدریت پست ها",
        icon:"ri-article-line",
        link:"/",
    },
    {
        title:"پست های من",
        icon:"ri-file-list-3-line",
        link:"/",
    },
    {
        title:"پروفایل",
        icon:"ri-user-6-line",
        link:"/",
    },
    {
        title:"خروج",
        icon:"ri-logout-circle-r-line",
        link:"/",
    },
]


sidebarData.map((item) => {
   aside.innerHTML += 
    `
    <li 
    class="flex items-center 
    md:text-sm xl:text-lg w-full 
    font-bold
    md:w-10/12 md:mx-auto 
    pl-0 md:pl-3 lg:pl-4 xl:pl-5
    transition-colors
    delay-150 
    active:border-r-2
    active:rounded-none
    active:md:bg-blue-200
    active:md:text-black
    active:text-blue-200
    active:border-blue-200
    hover:md:bg-blue-200
    hover:md:text-black
    rounded-md h-10 cursor-pointer gap-3">
        <i class="${item.icon} mx-auto md:mx-0"></i>
        <a href="${item.link}" class="hidden md:block">${item.title}</a>
    </li>
    `;
})
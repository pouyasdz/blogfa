const currentPath = window.location.pathname;
// console.log(currentPath);
const aside = document.querySelector("#sidebar");
const sidebarData = [
    {
        title:"داشبورد",
        icon:"ri-home-line",
        iconFill:"ri-home-fill",
        link:"/dashboard",
    },
    {
        title:"مدریت حساب ها",
        icon:"ri-group-line",
        iconFill:"ri-group-fill",
        link:"/dashboard/manage-account",
    },
    {
        title:"مدریت پست ها",
        icon:"ri-article-line",
        iconFill:"ri-article-fill",
        link:"/dashboard/manage-posts",
    },
    {
        title:"پست های من",
        icon:"ri-file-list-3-line",
        iconFill:"ri-file-list-3-fill",
        link:"/dashboard/post/my-post",
    },
    {
        title:"پروفایل",
        icon:"ri-user-6-line",
        iconFill:"ri-user-6-fill",
        link:"/dashboard/my-profile",
    },
    {
        title:"خروج",
        icon:"ri-logout-circle-r-line",
        iconFill:"ri-logout-circle-r-fill",
        link:"/auth/logout",
    },
]


sidebarData.map((item) => {
    const isActive =  item.link == currentPath;
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
    ${ isActive ? "bg-blue-200 text-black":""}
    ${item.link === "/auth/logout" && "text-red-400"}
    active:md:bg-blue-200
    active:md:text-black
    active:text-blue-200
    active:border-blue-200
    hover:md:bg-blue-200
    hover:md:text-black
    rounded-md h-10 cursor-pointer gap-3">
        <i class="${isActive ? item.iconFill : item.icon} mx-auto md:mx-0"></i>
        <a href="${item.link}" class="hidden md:block">${item.title}</a>
    </li>
    `;
})
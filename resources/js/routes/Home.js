const HTMLSnippet = () => import("../views/Home/HTMLSnippet/Index.vue")
const PDFDownload = () => import ("../views/Home/PDFDownload/Index.vue")
const Link = () => import ("../views/Home/Link/Index.vue")

const routes = [
    {
        path : "/html-snippet",
        component: HTMLSnippet,
        label: 'HTML Snippet',
        appendToSidebar: true,
    },
    {
        path : "/pdf-download",
        component: PDFDownload,
        label: 'PDF Download',
        appendToSidebar: true,
    },
    {
        path : "/link",
        component: Link,
        label: 'Link',
        appendToSidebar: true,
    },
    {
        path: "/:pathMatch(.*)*",
        redirect: '/html-snippet'
    }
]

export default routes

const HTMLSnippet = () => import("../views/Home/HTMLSnippet/Index.vue")
const PDFDownload = () => import ("../views/Home/PDFDownload/Index.vue")
const Link = () => import ("../views/Home/Link/Index.vue")

const routes = [
    {
        path : "/",
        component: HTMLSnippet,
    },
    {
        path : "/html-snippet",
        component: HTMLSnippet,
    },
    {
        path : "/pdf-download",
        component: PDFDownload,
    },
    {
        path : "/link",
        component: Link,
    }
]

export default routes

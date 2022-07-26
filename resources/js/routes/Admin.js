

//index pages of admin view
const HTMLSnippet = () => import("../views/Admin/HTMLSnippet/Index.vue")
const PDFDownload = () => import("../views/Admin/PDFDownload/Index.vue")
const Link = () => import("../views/Admin/Link/Index.vue")

//create pages of admin view
const HTMLSnippetCreate = () => import("../views/Admin/HTMLSnippet/Create.vue")
const PDFDownloadCreate = () => import("../views/Admin/PDFDownload/Create.vue")
const LinkCreate = () => import("../views/Admin/Link/Create.vue")

//edit pages of admin view
const HTMLSnippetEdit = () => import("../views/Admin/HTMLSnippet/Edit.vue")
const PDFDownloadEdit = () => import("../views/Admin/PDFDownload/Edit.vue")
const LinkEdit = () => import("../views/Admin/Link/Edit.vue")

const routes = [
    {
        path: '/admin/html-snippet',
        component: HTMLSnippet,
        label: 'HTML Snippet',
        appendToSidebar: true,
    },
    {
        path: '/admin/html-snippet/create',
        component: HTMLSnippetCreate,
    },
    {
        path: '/admin/html-snippet/edit/:snippet_id',
        component: HTMLSnippetEdit
    },
    {
        path: '/admin/pdf-download',
        component: PDFDownload,
        label: 'PDF Download',
        appendToSidebar: true,
    },
    {
        path: '/admin/pdf-download/create',
        component: PDFDownloadCreate
    },
    {
        path: '/admin/pdf-download/edit/:pdf_id',
        component: PDFDownloadEdit
    },
    {
        path: '/admin/link',
        component: Link,
        label: 'Link',
        appendToSidebar: true,
    },
    {
        path: '/admin/link/create',
        component: LinkCreate
    },
    {
        path: '/admin/link/edit/:link_id',
        component: LinkEdit
    },
    {
        path: "/admin/:pathMatch(.*)*",
        redirect: '/admin/html-snippet'
    }
  ]  

export default routes
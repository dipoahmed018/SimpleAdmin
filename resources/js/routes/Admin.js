

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
        path: '/admin',
        component: HTMLSnippet
    },
    {
        path: '/admin/html-snippet',
        component: HTMLSnippet
    },
    {
        path: '/admin/html-snippet/create',
        component: HTMLSnippetCreate
    },
    {
        path: '/admin/html-snippet/edit',
        component: HTMLSnippetEdit
    },
    {
        path: '/admin/pdf-download',
        component: PDFDownload
    },
    {
        path: '/admin/pdf-download/create',
        component: PDFDownloadCreate
    },
    {
        path: '/admin/pdf-download/edit',
        component: PDFDownloadEdit
    },
    {
        path: '/admin/link',
        component: Link
    },
    {
        path: '/admin/link/create',
        component: LinkCreate
    },
    {
        path: '/admin/link/edit',
        component: LinkEdit
    }
  ]  

export default routes
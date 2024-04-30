const Home = () => import('./components/Home.vue') 
const Contact = () => import('./components/Contact.vue') 

//Components of processor

const Show = () => import('./components/processor/Show.vue')
const Edit = () => import('./components/processor/Edit.vue')
const Create = () => import('./components/processor/Create.vue')

export const routes = [ 
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'showProcessor',
        path: '/processor',
        component: Show
    },
    {
        name: 'createProcessor',
        path: '/create',
        component: Create
    },
    {
        name: 'editProcessor',
        path: '/edit',
        component: Edit
    }
]
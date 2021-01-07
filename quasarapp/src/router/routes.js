
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: 'programs', name: 'program-list', component: () => import('pages/Programs.vue') },
      { path: 'program/:id', name: 'show-program', component: () => import('pages/ProgramDetail.vue') },
      { path: 'overview', name: 'overview', component: () => import('pages/Overview.vue') },
      { path: 'misc', name: 'misc', component: () => import('pages/Misc.vue') }
    ]
  },



  // Always leave this as last one,
  // but you can also remove it
  {
    path: '*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes

import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/HomeView.vue'),
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/account',
      name: 'account',
      component: () => import('../views/AccountView.vue')
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: () => import('../views/DashboardView.vue')
    },
    {
      path: '/plan',
      name: 'plan',
<<<<<<< HEAD
      component: () => import('../views/plan/PlanView.vue')
    },
    {
      path: '/transaction',
      name: 'transaction',
      component: () => import('../views/plan/PlanNewTransactionView.vue')
    },
    {
      path: '/legalnotice',
      name: 'legalnotice',
      component: () => import('../views/footer/LegalNoticeView.vue')
    },
    {
      path: '/privacy',
      name: 'privacy',
      component: () => import('../views/footer/PrivacyView.vue')
=======
      component: () => import('../views/PlanView.vue')
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/LoginView.vue')
    },
    {
      path: '/register',
      name: 'register',
      component: () => import('../views/RegisterView.vue')
>>>>>>> 255f8a1c40f5c5707e0ae2f015cb551a83d48247
    }
  ],
  scrollBehavior (to, from, savedPosition) {
    return { top: 0 }
  }
})

export default router

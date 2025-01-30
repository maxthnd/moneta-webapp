import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import PageNotFoundView from "@/views/PageNotFoundView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/HomeView.vue'),
      meta: {
        title: 'Home'
      }
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue'),
      meta: {
        title: 'About Us'
      }
    },
    {
      path: '/account',
      name: 'account',
      component: () => import('../views/account/AccountView.vue'),
      meta: {
        title: 'Account Overview'
      }
    },
    {
      path: '/account/data',
      name: 'accountData',
      component: () => import('../views/account/AccountDataView.vue'),
      meta: {
        title: 'Account Data'
      }
    },
    {
      path: '/account/support',
      name: 'accountSupport',
      component: () => import('../views/account/SupportView.vue'),
      meta: {
        title: 'Support'
      }
    },
    {
      path: '/account/billing',
      name: 'accountBilling',
      component: () => import('../views/account/BillingInformationView.vue'),
      meta: {
        title: 'Billing',
      }
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: () => import('../views/dashboard/DashboardView.vue'),
      meta: {
        title: 'Dashboard'
      }
    },
    {
      path: '/plan',
      name: 'plan',
      component: () => import('../views/plan/PlanView.vue'),
      meta: {
        title: 'Plan Overview'
      }
    },
    {
      path: '/transaction',
      name: 'transaction',
      component: () => import('../views/plan/PlanNewTransactionView.vue'),
      meta: {
        title: 'New Transaction',
      }
    },
    {
      path: '/legalnotice',
      name: 'legalnotice',
      component: () => import('../views/footer/LegalNoticeView.vue'),
      meta: {
        title: 'Legal Notice'
      }
    },
    {
      path: '/privacy',
      name: 'privacy',
      component: () => import('../views/footer/PrivacyView.vue'),
      meta: {
        title: 'Privacy Policy',
      }
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/LoginView.vue'),
      meta: {
        title: 'Login'
      }
    },
    {
      path: '/register',
      name: 'register',
      component: () => import('../views/RegisterView.vue'),
      meta: {
        title: 'Register'
      }
    },
    {
      path: '/:pathMatch(.*)*',
      component: PageNotFoundView,
    }
  ],
  scrollBehavior (to, from, savedPosition) {
    return { top: 0 }
  }
})
router.beforeEach((to, from, next) => {

  // check authentication

  // Site title
  document.title = 'Moneta | ' + to.meta.title
  next()
})
export default router

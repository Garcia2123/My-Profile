import Vue from 'vue'
import Router from 'vue-router'
import Resume from '@/components/Resume'
import VueResource from 'vue-resource'

Vue.use(Router)
Vue.use(VueResource);

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Resume',
      component: Resume
    }
  ]
})

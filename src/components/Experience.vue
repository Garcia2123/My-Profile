<template>
    <div class="center">
        <h1>{{ title }}</h1>
        <div class='experience_item' v-for='item in experience_info'>
            <h3 class="experience_item__company">{{ item.company }}</h3>
            <div class="experience_item__project" v-for='(p, index) in item.project_list'>
                <h4>{{ index + 1 }}.{{ p.title }}</h4>
                <p>{{ p.content }}</p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'Experience',
        data() {
            return {
                title:'工作经历',
                experience_info: [
                    {company:'南京科斯克网络科技有限公司（2015.2至今-全栈工程师）',
                    project_list: [
                        {title: `马来西亚Unilife商城系统`, content: `在该项目中，我带领4人团队共同完成整个商城的架构到实现。我们将整个系统的商城、库存、分销、采购等相对独立的功能模块化处理，降低代码耦合，提升代码可维护性。我主要负责商城、卖家中心部分PC端的前端实现。考虑到马来西亚的使用环境，该项目采用了Stripe支付方式取代我们平时常用的支付，它能够高效安全地支持各种信用卡支付。并且该商城支持多语言系统，能够随时扩展其他语言包。不同于常见的商城，我利用Mapbox采用了地图的形式同时呈现所有店铺来满足“店铺平等”的特殊需求。`},
                        {title: `青蛙旅行攻略小程序`, content: `这是一个资讯类的小程序，由我独立完成从规划到部署上线的所有任务。后台是一个简单的CMS系统专门用来发帖，小程序从服务器端获取后台发的帖子，可以阅读分享，对于文章中的电话也可以拨号。同时接入了小程序客服，后台可以自由配置回复内容（支持图文链接）。我使用的服务器环境配置为Ubuntu+Nginx+Mysql。`},
                    ]}
                ]
            }
        }
    }
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .center {
        color: #fff;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        max-height: calc(100% - 50px);
        overflow: scroll;
        padding-right: 15px;
    }
    .experience_item {
        text-align: left;
    }
    .experience_item__project > p {
        font-size: 13px;
    }
</style>
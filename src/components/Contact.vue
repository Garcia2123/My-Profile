<template>
    <div class="center">
        <h1>{{ title }}</h1>
        <h3 class='contact_info' v-for='item in contact_info'>
            <span class="contact_info__name">{{ item.name }}：</span>
            <span class="contact_info__value">{{ item.value }}</span>
        </h3>
    </div>
</template>
<script>
    export default {
        name: 'Contact',
        data() {
            return {
                title:'联系方式',
                contact_info: [
                    {name:'手机', value:'15******061'},
                    {name: '邮箱', value: 'y*****@qq.com'},
                    {name:'QQ', value:'5*******1'}
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
    }
    .contact_info__name {
        display: inline-block;
        width: 70px;
        text-align: left;
    }
    .contact_info__value {
        display: inline-block;
        width: 150px;
        text-align: left;
        overflow: visible;
    }
</style>
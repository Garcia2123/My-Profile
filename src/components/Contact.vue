<template>
    <div class="center">
        <h1>{{ title }}</h1>
        <h3 class='contact_info' v-if='mobile'>
            <span class="contact_info__name">手机：</span>
            <span class="contact_info__value">{{ mobile }}</span>
        </h3>
        <h3 class='contact_info'>
            <span class="contact_info__name" v-if='email'>邮箱：</span>
            <span class="contact_info__value">{{ email }}</span>
        </h3>
        <h3 class='contact_info'>
            <span class="contact_info__name" v-if='qq'>QQ：</span>
            <span class="contact_info__value">{{ qq }}</span>
        </h3>
    </div>
</template>
<script>
    export default {
        name: 'Contact',
        props: ['mobile','email','qq'],
        data() {
            return {
                title:'联系方式',
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
        max-width: calc(100% - 40px);
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
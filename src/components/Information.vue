<template>
    <div class="center">
        <h1>{{ title }}</h1>
        <h3 class='information_info' v-for='item in information_info'>
            <span class="information_info__name" v-if='item.name'>{{ item.name }}：</span>
            <span class="information_info__value">{{ item.value }}</span>
        </h3>
    </div>
</template>
<script>
    export default {
        name: 'Information',
        data() {
            return {
                title:'个人信息',
                information_info: [
                    {value: '**/女/1993'},
                    {name: '工作年限', value: '3年'},
                    {name: '学历', value: '本科/南京邮电大学计算机科学与技术'},
                    {name:'期望职位', value: 'Web前端工程师（15-20k）'},
                    {name: '技术博客', value: 'https://www.*****'}
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
</style>
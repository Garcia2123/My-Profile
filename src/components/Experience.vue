<template>
    <div class="center">
        <h1>{{ title }}</h1>
        <div class='experience_item' v-for='item in experience'>
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
        props:['experience'],
        data() {
            return {
                title:'工作经历',
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
        max-width: calc(100% - 40px);
    }
    .experience_item {
        text-align: left;
    }
    .experience_item__project > p {
        font-size: 13px;
    }
</style>
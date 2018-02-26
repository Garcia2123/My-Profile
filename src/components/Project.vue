<template>
    <div class="center">
        <h1>{{ title }}</h1>
        <div class="project" v-for='(p, index) in project'>
            <h3>{{ index + 1 }}.{{ p.title }}</h3>
            <p>{{ p.content }}</p>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'Project',
        props:['project'],
        data() {
            return {
                title:'个人项目'
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
    .project {
        width: 500px;
        text-align: left;
    }
</style>
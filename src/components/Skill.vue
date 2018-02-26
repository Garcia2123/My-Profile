<template>
    <div class="center">
        <h1>{{ title }}</h1>
        <div class="skill-box">
            <p class="skill" v-html='skill'></p>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'Skill',
        props:['skill'],
        data() {
            return {
                title:'技能清单'
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
    .skill {
        max-height: calc(100% - 50px);
        overflow: scroll;
    }
</style>
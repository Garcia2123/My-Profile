<template>
    <div class="center">
        Skills {{ title }}
    </div>
</template>
<script>
    export default {
        name: 'Skills',
        data() {
            return {
                title:'zy'
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
<template>
    <div class="carousel-box">
        <el-carousel :height="height" :autoplay='autoplay'>
            <el-carousel-item :position='position'>
                <contact />
            </el-carousel-item>
            <el-carousel-item :position='position'>
                <Information />
            </el-carousel-item>
            <el-carousel-item :position='position'>
                <experience />
            </el-carousel-item>
            <el-carousel-item :position='position'>
                <project />
            </el-carousel-item>
            <el-carousel-item :position='position'>
                <skills />
            </el-carousel-item>
        </el-carousel>
    </div>
</template>
<script>
    import Contact from '@/components/Contact'
    import Information from '@/components/Information'
    import Skills from '@/components/Skills'
    import Experience from '@/components/Experience'
    import Project from '@/components/Project'

    export default {
        name: 'Resume',
        data() {
            return {
                item: 1,
                height: '100%',
                autoplay: false,
                position: 'relative'
            }
        },
        created: function () {
            this.$http.get('http://admin.yuri.cool/index.php?s=/resume/index/index').then(response => {

                // get body data
                // this.someData = response.body;
                console.log(response.body);

            }, response => {
                // error callback
            });
        },
        components: {
            'contact': Contact,
            'Information': Information,
            'skills': Skills,
            'experience': Experience,
            'project': Project
        }
    }
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    .carousel-box {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }
    .el-carousel {
        height: 100%!important;
    }
    .el-carousel__item h3 {
        color: #475669;
        font-size: 14px;
        opacity: 0.75;
        line-height: 150px;
        margin: 0;
    }
    .el-carousel__item:nth-child(3) {
        background-color: #2d4d88;
    }
    .el-carousel__item:nth-child(4) {
        background-color: #2f3c4d;
    }
    .el-carousel__item:nth-child(5) {
        background-color: #6985b5;
    }
    .el-carousel__item:nth-child(6) {
        background-color: #a2cdf0;
    }
    .el-carousel__item:nth-child(7) {
        background-color: #004969;
    }
</style>
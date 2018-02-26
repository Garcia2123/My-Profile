<template>
    <div class="center">
        <h1>{{ title }}</h1>
        <h3 class='information_info' v-if='name || gender_text || birthday'>
            <span class="information_info__name"></span>
            <span class="information_info__value">
                {{ name }}
                <span v-if='gender_text'>/{{ gender_text }}</span>
                <span v-if='birthday'>/{{ birthday }}</span>
            </span>
        </h3>
        <h3 class='information_info' v-if='work_year'>
            <span class="information_info__name">工作年限：</span>
            <span class="information_info__value">{{ work_year }}</span>
        </h3>
        <h3 class='information_info' v-if='academic_text || school || major'>
            <span class="information_info__name">学历：</span>
            <span class="information_info__value">
                {{ academic_text }}
                <span v-if='school'>/{{ school }}</span>
                <span v-if='major'>{{ major }}</span>
            </span>
        </h3>
        <h3 class='information_info' v-if='expect_position'>
            <span class="information_info__name">期望职位：</span>
            <span class="information_info__value">
                {{ expect_position }}
                <span v-if='expect_salary'>({{ expect_salary }})</span>
            </span>
        </h3>
        <h3 class='information_info' v-if='website'>
            <span class="information_info__name">个人网站：</span>
            <span class="information_info__value">{{ website }}</span>
        </h3>
    </div>
</template>
<script>
    export default {
        name: 'Information',
        props:['name','gender_text','birthday','work_year','academic_text','school','major','expect_position','expect_salary','website'],
        data() {
            return {
                title:'个人信息',
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
</style>
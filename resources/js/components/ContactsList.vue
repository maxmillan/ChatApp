<template>
<div class="contacts-list">
    <ul>
        <li v-for="(contact, index) in contacts" :key="contact.id" @click="selectContact(index, contact)" :class="{'selected': index == selected}">
            <div class="avatar">
                <img src="contact.image" :alt="contact.name">
            </div>
            <div class="contact">
                <p class="name">{{contact.name}}</p>
                <p class="email">{{contact.email}}</p>
            </div>
        </li>
    </ul>
</div>
</template>

<script>
    export default {
        props: {
            contacts: {
                type:Array,
                default: []
            }
        },
        data(){
            return{
                selected:0
            };
        },
        methods:{
            selectContact(index,contact){
                this.selected = index;
                this.$emit('selected', contact);
            }
        }

    }
</script>

<style lang="scss" scoped>
    .contacts-list{
        flex: 2;
        max-height: 600px;
        overflow: scroll;
        border-left: 1px solid #00a6a4;
    }
    ul{
        list-style-type:none;
        padding-left:0;
        li{
            display: flex;
            padding: 2px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            height: 80px;
            position: relative;
            cursor: pointer;
            .avatar{
                flex: 1;
                display:flex;
                align-items:center;
                img{
                    width: 35px;
                    border-radius: 50%;
                    margin: 0 auto;
                }
            }
            .contact{
                flex: ;
            }
        }
    }
</style>

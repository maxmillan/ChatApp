<template>
<div class="feed">
    <ul v-if="contact">
        <li v-for="message in messages" :class="`message${message.to == contact.id ? 'sent' : 'received'}`" :key="message.id">
            <div class="text">
                {{message.text}}
            </div>
        </li>
    </ul>
</div>
</template>

<script>
    export default {
        props:{
            contact:{
                type:Object,
            },
            messages:{
                type:Array,
                required:true
            }
        }
    }
</script>

<style scoped>

</style>

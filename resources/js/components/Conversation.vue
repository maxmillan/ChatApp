<template>
<div class="conversation">
    <h1>{{contact ? contact.name : 'select a contact'}}</h1>
    <MessagesFeed :contact="contact" :messages="messages"/>
    <MessageComposer @send="sendMessage"/>
</div>
</template>

<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from "./MessageComposer";
    export default {
        props: {
            contact:{
                type: Object,
                default: null
            },
            messages: {
                type: Array,
                default: []
            }
        },
        methods:{
            sendMessage(text){
                console.log(text);
            }
        },
        components: {MessagesFeed, MessageComposer}

    }
</script>

<style lang="scss" scoped>
.conversation{
    flex: 5;
}
</style>

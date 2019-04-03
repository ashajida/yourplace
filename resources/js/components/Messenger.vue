<template>
    <form id="message-form">
        <textarea type="text" name="message" form="message-form"></textarea>
        <input type="submit" v-model="messageBody">
        <input hidden value="">
    </form>
</template>
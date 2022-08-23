<template>
    <t-login
        color="solid-gray"
        :radius="5"
        bg-color="light-gray"
        login-button-color="solid-gray"
        :status="status"
    >
        <!--Logo-->
        <template #logo>
            <inertia-link href="/">
                <div class="flex flex-col justify-center items-center w-full">
                    <t-logo class="w-20 h-20" />
                    <span class="text-3xl">Elementar Dev</span>
                </div>
            </inertia-link>
        </template>
        <!--Greeting-->
        <template #greeting> Entre na sua conta </template>
    </t-login>
</template>

<script>
import TLogin from "@/Components/Auth/TLogin";
import TLogo from "@/Components/Icon/TLogo";

export default {
    components: {
        TLogo,
        TLogin,
    },

    props: {
        status: String,
    },
};
</script>

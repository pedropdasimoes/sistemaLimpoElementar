<template>
    <app-layout>
        <template #header> Bem vindo Sistema Limpo ElementarDev </template>
        <template #subHeader> </template>
        <template #default> </template>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";
import GridSection from "@/Layouts/GridSection";
import TStatisticWidget from "@/Components/Card/TStatisticWidget";
import TCashIcon from "@/Components/Icon/TCashIcon";
import TShoppingBagIcon from "@/Components/Icon/TShoppingBagIcon";
import TContentCard from "@/Components/Card/TContentCard";
import TList from "@/Components/List/TList";
import TListItem from "@/Components/List/TListItem";
import TAvatar from "@/Components/Avatar/TAvatar";
import TTable from "@/Components/Table/TTable";
import TBreadcrumb from "@/Components/Breadcrumb/TBreadcrumb";
import TProgress from "@/Components/Progress/TProgress";
import TAlert from "@/Components/Alert/TAlert";
import TInformationCircleIcon from "@/Components/Icon/TInformationCircleIcon";
import TTrashIcon from "@/Components/Icon/TTrashIcon";
import TCheckCircleIcon from "@/Components/Icon/TCheckCircleIcon";

export default {
    components: {
        TCheckCircleIcon,
        TTrashIcon,
        TInformationCircleIcon,
        TAlert,
        TProgress,
        TBreadcrumb,
        TTable,
        TAvatar,
        TListItem,
        TList,
        TContentCard,
        TShoppingBagIcon,
        TCashIcon,
        TStatisticWidget,
        GridSection,
        AppLayout,
        Welcome,
    },
    data() {
        return {
            tableHeader: [
                { key: "id", label: "ID", position: "center" },
                { key: "name", label: "Name", position: "left" },
                { key: "start", label: "Start Date", position: "left" },
                { key: "end", label: "End Date", position: "left" },
                { key: "status", label: "Status", position: "center" },
            ],
            tableContent: [
                {
                    id: 1,
                    name: "VueJS Components",
                    start: "01.03.2021",
                    end: "14.09.2021",
                    status: 10,
                },
                {
                    id: 2,
                    name: "Custom Style Optimize",
                    start: "02.05.2021",
                    end: "25.08.2021",
                    status: 20,
                },
                {
                    id: 3,
                    name: "Error Management",
                    start: "25.04.2021",
                    end: "30.12.2021",
                    status: 70,
                },
            ],
            breadcrumbs: [
                { label: "Home", link: "/", active: false },
                {
                    label: "Dashboard",
                    link: "",
                    active: true,
                    activeColor: "blue",
                },
            ],
        };
    },
};
</script>

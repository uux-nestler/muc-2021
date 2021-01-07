<template>
    <q-layout view="lHh Lpr lFf">
        <q-header elevated>
            <q-toolbar>
                <q-btn
                    flat
                    dense
                    round
                    icon="menu"
                    aria-label="Menu"
                    @click="leftDrawerOpen = !leftDrawerOpen"
                    />

                <q-toolbar-title>
                    MuC App
                </q-toolbar-title>

                <div>&copy; THI</div>
            </q-toolbar>
        </q-header>

        <q-drawer
            v-model="leftDrawerOpen"
            show-if-above
            bordered
            content-class="bg-grey-1"
            >
            <q-list>
                <q-item-label
                    header
                    class="text-grey-8"
                    >
                    Navigation
                </q-item-label>
                <SideBar
                    v-for="link in sideBar"
                    :key="link.title"
                    v-bind="link"
                    />
            </q-list>
        </q-drawer>

        <q-page-container>
            <router-view />
        </q-page-container>
    </q-layout>
</template>

<script>
    import SideBar from 'components/SideBar.vue'

            const linksData = [
                {
                    title: 'Overview',
                    icon: 'info',
                    to: {name: 'overview'}
                },
                {
                    title: 'Program',
                    icon: 'event_seat',
                    to: {name: 'program-list'}
                },
                {
                    title: 'Misc',
                    icon: 'policy',
                    to: {name: 'misc'}
                }
            ]

    export default {
        name: 'MainLayout',
        components: {SideBar},
        data() {
            return {
                leftDrawerOpen: false,
                sideBar: linksData
            }
        }
    }
</script>

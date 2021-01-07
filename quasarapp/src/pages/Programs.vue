<template>
    <q-list
        bordered
        separator
        >
        <q-item
            v-for="program in programs"
            :to="{ name: 'show-program', params: { id : program.id }}"
            class="q-my-sm"
            clickable
            v-ripple
            >
            <q-item-section>
                <q-item-label>{{program.title}}</q-item-label>
                <q-item-label
                    caption
                    lines="1"
                    >
                 {{ program.ort }}
                </q-item-label>
            </q-item-section>
        </q-item>
    </q-list>
</template>

<script>


    export default
            {
                data() {
                    return {
                        programs: '',
                        newProgramDialog: false,
                        inputTitle: '',
                        inputLecturer: '',
                        inputRoom: ''
                    }
                },
                created() {
                    this.loadData()
                },
                methods:
                        {
                            loadData() {
                                this.$axios.get('http://localhost:8887/api/programs')
                                        .then((response) => {
                                            this.programs = response.data
                                        })
                                        .catch(() => {
                                            this.programs = "";
                                            this.$q.notify({
                                                color: 'negative',
                                                position: 'top',
                                                message: 'Loading failed',
                                                icon: 'report_problem'
                                            })
                                        })
                            }
                        }
            }
</script>

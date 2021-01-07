<template>   
    <q-card class="my-card3">
        <q-card-section horizontal>
            <q-card-section class="q-pt-xs">
                <div class="text-overline"> <router-link :to="{ name: 'program-list' }">&lt; Program</router-link></div>
                <div class="text-h5 q-mt-sm q-mb-xs">{{ program.title }}</div>
                <div class="text-caption text-grey">
                    {{ program.content }}
                </div>

            </q-card-section>
        </q-card-section>

        <q-list>
            <q-item clickable>
                <q-item-section avatar>
                    <q-icon color="primary" name="location_on" />
                </q-item-section>

                <q-item-section>
                    <q-item-label>{{ program.ort }}</q-item-label>
                </q-item-section>
            </q-item>

            <q-item clickable>
                <q-item-section avatar>
                    <q-icon color="red" name="event" />
                </q-item-section>

                <q-item-section>
                    <q-item-label>{{ program.date }}</q-item-label>
                </q-item-section>
            </q-item>

            <q-item clickable>
                <q-item-section avatar>
                    <q-icon color="amber" name="schedule" />
                </q-item-section>

                <q-item-section>
                    <q-item-label>{{ program.zeit }}</q-item-label>
                </q-item-section>
            </q-item>
        </q-list>
    </q-card>
</template>

<script>


    export default
            {
                data() {
                    return {
                        program: '',
                        id: ''
                    }
                },
                created() {
                    this.loadData()
                },
                methods:
                        {
                            loadData() {
                                console.log("start");
                                this.id = this.$route.params.id;
                                console.log(this.id);
                                this.$axios.get('http://localhost:8887/api/programs/' + this.id)
                                        .then((response) => {
                                            this.program = response.data
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

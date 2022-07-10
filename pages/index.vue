<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-toolbar class="text-h5 white--text" color="#B689C0">
            <fa
              :icon="['fas', 'person-walking-with-cane']"
              class="text-h4 mr-2"
            />
            บันทึกข้อมูลทั่วไป
          </v-toolbar>

          <v-card-text v-if="person_show">
            <v-alert outlined color="purple">
              <div class="text-h6">ข้อมูลผู้สูงอายุ</div>

              <div class="text-h6 text--primary">
                 <div class="d-flex flex-row">
                  HN :
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.hn_show }}
                  </div>
                  เลขบัตรประชาชน :
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.cid_show }}
                  </div>
                
                </div></br>
                <div class="d-flex flex-row">
                  
                  ชื่อ-นามสกุล :
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.name_show }}
                  </div>
                  อายุ:
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.age_show }}
                  </div>
                  ปี ศูนย์บริการ :
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.name_cmu_show }}
                  </div>
                  ผู้ประเมิน:
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.assessor_show }}
                  </div>
                </div>
              </div>
            </v-alert>
          </v-card-text>

          <v-stepper v-model="e1">
            <v-stepper-header>
              <v-stepper-step :complete="e1 > 1" step="1" color="#B689C0">
                ลงทะเบียน
              </v-stepper-step>

              <v-divider></v-divider>

              <v-stepper-step :complete="e1 > 2" step="2" color="#B689C0">
                ADL
              </v-stepper-step>

              <v-divider></v-divider>

              <v-stepper-step step="3" color="#B689C0">
                FRAX-SCORE
              </v-stepper-step>
            </v-stepper-header>

            <v-stepper-items>
              <v-stepper-content step="1">
                <v-card>
                   <v-card-text>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                      <fa :icon="['fas', 'circle-right']" size="2x" />
                         <p class="text-h6 mb-1 ml-1">ADL</p>
                    </v-btn>
                    <v-btn class="white--text" color="#066163">
                      <p class="text-h6 mb-1 ml-1">หัวข้อ {{ e1 }}</p>
                    </v-btn>
                  </v-card-text>
                  <v-card-text>
                    <Regis @sendcid="ciduse"
                     @regisclearindex="clear_index_person" 
                     @call_adl_frax_score ="adl_frax_score_select" />
                  </v-card-text>
                  <v-card-text>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                      <fa :icon="['fas', 'circle-right']" size="2x" />
                    </v-btn>
                    <v-btn class="white--text" color="#066163">
                      <p class="text-h6 mb-1 ml-1">หัวข้อ {{ e1 }}</p>
                    </v-btn>
                  </v-card-text>
                </v-card>
              </v-stepper-content>

              <v-stepper-content step="2">
                <v-card>
                   <v-card-text>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                      <fa :icon="['fas', 'circle-left']" size="2x" />
                         <p class="text-h6 mb-1 ml-1">ลงทะเบียน</p>
                    </v-btn>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                      <fa :icon="['fas', 'circle-right']" size="2x" />
                         <p class="text-h6 mb-1 ml-1">FRAX-SCORE</p>
                    </v-btn>
                    <v-btn class="white--text" color="#066163">
                      <p class="text-h6 mb-1 ml-1">หัวข้อ {{ e1 }}</p>
                    </v-btn>
                  </v-card-text>
                  <v-card-text>
                    <Adl ref="sendcidhnadl" />
                  </v-card-text>
                  <v-card-text>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                      <fa :icon="['fas', 'circle-left']" size="2x" />
                         <p class="text-h6 mb-1 ml-1">ลงทะเบียน</p>
                    </v-btn>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                      <fa :icon="['fas', 'circle-right']" size="2x" />
                          <p class="text-h6 mb-1 ml-1">FRAX-SCORE</p>
                    </v-btn>
                    <v-btn class="white--text" color="#066163">
                      <p class="text-h6 mb-1 ml-1">หัวข้อ {{ e1 }}</p>
                    </v-btn>
                  </v-card-text>
                </v-card>
              </v-stepper-content>

              <v-stepper-content step="3">
                <v-card>
                    <v-card-text>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                      <fa :icon="['fas', 'circle-left']" size="2x" />
                         <p class="text-h6 mb-1 ml-1">ADL</p>
                    </v-btn>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                      <fa :icon="['fas', 'circle-right']" size="2x" />
                         <p class="text-h6 mb-1 ml-1">ลงทะเบียน</p>
                    </v-btn>
                    <v-btn class="white--text" color="#066163">
                      <p class="text-h6 mb-1 ml-1">หัวข้อ {{ e1 }}</p>
                    </v-btn>
                  </v-card-text>
                  <v-card-text>
                    <Frax_Score  ref="sendcidhnfraxscore"/>
                  </v-card-text>
                  <v-card-text>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                      <fa :icon="['fas', 'circle-left']" size="2x" />
                         <p class="text-h6 mb-1 ml-1">ADL</p>
                    </v-btn>
                    <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                      <fa :icon="['fas', 'circle-right']" size="2x" />
                         <p class="text-h6 mb-1 ml-1">ลงทะเบียน</p>
                    </v-btn>
                    <v-btn class="white--text" color="#066163">
                      <p class="text-h6 mb-1 ml-1">หัวข้อ {{ e1 }}</p>
                    </v-btn>
                  </v-card-text>
                </v-card>
              </v-stepper-content>
            </v-stepper-items>
          </v-stepper>
        </v-card-text>
      </v-card>
     
    </v-col>
  </v-row>
</template>

<script>
import Regis from '~/components/Regis.vue'
import Adl from '~/components/Adl.vue'
import Frax_Score from '~/components/Frax-Score.vue'

export default {
  name: 'IndexPage',
  data() {
    return {
      e1: 1,
      person_show: false,
      person_data: '',
      name_show: '-',
      age_show: '-',
      name_cmu_show: '-',
      assessor_show: '-',
      cid_show: '-',
      hn_show: '-',
    }
  },
  components: {
    Regis,
    Adl,
    Frax_Score,
  },

  mounted() {},
  methods: {
    ciduse(data) {
      this.person_data = data
      // alert(this.person_data[0].age)

      this.name_show = this.person_data[0].fullname
      this.age_show = this.person_data[0].age
      this.name_cmu_show = this.person_data[0].name
      this.assessor_show = this.person_data[0].assessor
      this.cid_show = this.person_data[0].cid
      this.hn_show = this.person_data[0].hn

      this.person_show = true
      this.overlay = false

      this.$refs.sendcidhnadl.receive_cidhn(this.person_data)
      this.$refs.sendcidhnfraxscore.receive_cidhn(this.person_data)
    },
    clear_index_person() {
      this.name_show = ''
      this.age_show = ''
      this.name_cmu_show = ''
      this.assessor_show = ''
      this.cid_show = ''
      this.hn_show = ''
      this.person_show = false
      this.$refs.sendcidhnadl.clear_form()
      this.$refs.sendcidhnfraxscore.clear_form()
    },
    adl_frax_score_select(data) {
      this.person_data = data
      this.$refs.sendcidhnadl.adl_select(this.person_data)
      this.$refs.sendcidhnfraxscore.frax_score_select(this.person_data)
    },
  },
}
</script>


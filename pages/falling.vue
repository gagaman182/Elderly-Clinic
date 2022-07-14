 <template>
  <v-row>
    <v-col>
      <v-card-text>
        <v-toolbar class="text-h5 white--text" color="#B689C0">
          <fa :icon="['fas', 'person-falling']" class="text-h4 mr-2" />
          Falling
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

        <div class="mt-2 mb-2">
          <v-alert
            icon="mdi-comment-arrow-right "
            border="top"
            color="#92BA92"
            dark
          >
            <div class="secondary" style="width: 16rem">
              กรณีประเมินผล Oxford Knee Score
            </div>
            <div
              class="
                text-no-wrap
                blue-grey--text
                text-h5 text-decoration-underline
              "
            >
              คะแนน ระหว่าง 30-39 พบนักกายภาพ
            </div>
            <div
              class="
                text-no-wrap
                blue-grey--text
                text-h5 text-decoration-underline
              "
            >
              คะแนน น้อยกว่า 30 พบแพทย์
            </div>
            <br />
            <div class="secondary" style="width: 9rem">
              กรณีประเมินผล SPPB
            </div>
            <div
              class="blue--text text-h5 text-decoration-underline"
            >
              ผลปกติ พบนักกายภาพ
            </div>
            <div
              class="red--text text-h5 text-decoration-underline"
            >
              ผลผิดปกติ ส่งกลับพยาบาล
            </div>
          </v-alert>
        </div>
        <v-stepper v-model="e1">
          <v-stepper-header>
            <v-stepper-step :complete="e1 > 1" step="1" color="#B689C0">
              ประวัติการหกล้ม
            </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 2" step="2" color="#B689C0">
              Short_Fbs_I
            </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 3" step="3" color="#B689C0">
              TUGT
            </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 4" step="4" color="#B689C0">
              Oxford Knee Score
            </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 5" step="5" color="#B689C0">
              บ้านเสี่ยงล้ม
            </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 6" step="6" color="#B689C0">
              SPPB
            </v-stepper-step>
          </v-stepper-header>

          <v-stepper-items>
            <v-stepper-content step="1">
              <v-card>
                <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">Short_Fbs_I</p>
                  </v-btn>

                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
                <v-card-text>
                  <!-- <Fall @miniclog="miniclog_return" /> -->
                  <Fall
                    @sendcid="ciduse"
                    @regisclearindex="clear_index_person"
                    @call_adl_frax_score="adl_frax_score_select"
                    ref="sendcidhnfall"
                  />
                </v-card-text>
                <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">Short_Fbs_I</p>
                  </v-btn>

                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
              </v-card>
            </v-stepper-content>

            <v-stepper-content step="2">
              <v-card>
                 <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                    <fa :icon="['fas', 'circle-left']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">ประวัติการหกล้ม</p>
                  </v-btn>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">TUGT</p>
                  </v-btn>
                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
                <v-card-text>
                  <Short_Fbs_I    ref="sendcidhnshort_fbs_i"/>
                </v-card-text>
                <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                    <fa :icon="['fas', 'circle-left']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">ประวัติการหกล้ม</p>
                  </v-btn>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">TUGT</p>
                  </v-btn>
                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
              </v-card>
            </v-stepper-content>

            <v-stepper-content step="3">
              <v-card>
                  <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                    <fa :icon="['fas', 'circle-left']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">Short_Fbs_I</p>
                  </v-btn>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 4">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">Oxford Knee Score</p>
                  </v-btn>
                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
                <v-card-text>
                  <Tug ref="sendcidhntug"/>
                </v-card-text>
                <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                    <fa :icon="['fas', 'circle-left']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">Short_Fbs_I</p>
                  </v-btn>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 4">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">Oxford Knee Score</p>
                  </v-btn>
                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
              </v-card>
            </v-stepper-content>
            <v-stepper-content step="4">
              <v-card>
                 <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                    <fa :icon="['fas', 'circle-left']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">TUGT</p>
                  </v-btn>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 5">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">บ้านเสี่ยงล้ม</p>
                  </v-btn>
                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
                <v-card-text>
                  <Knee_Score ref="sendcidhnkneescore"/>
                </v-card-text>
                <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                    <fa :icon="['fas', 'circle-left']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">TUGT</p>
                  </v-btn>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 5">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">บ้านเสี่ยงล้ม</p>
                  </v-btn>
                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
              </v-card>
            </v-stepper-content>
            <v-stepper-content step="5">
              <v-card>
                 <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 4">
                    <fa :icon="['fas', 'circle-left']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">Oxford Knee Score</p>
                  </v-btn>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 6">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">SPPB</p>
                  </v-btn>
                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
                <v-card-text>
                  <Risk_fall ref="sendcidhnriskfall"/>
                </v-card-text>
                <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 4">
                    <fa :icon="['fas', 'circle-left']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">Oxford Knee Score</p>
                  </v-btn>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 6">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">SPPB</p>
                  </v-btn>
                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
              </v-card>
            </v-stepper-content>
            <v-stepper-content step="6">
              <v-card>
                <v-card-text>
                  <Sppb ref="sendcidhnsppb"/>
                </v-card-text>
                <v-card-text>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 5">
                    <fa :icon="['fas', 'circle-left']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">SPPB</p>
                  </v-btn>
                  <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                    <fa :icon="['fas', 'circle-right']" size="2x" />
                    <p class="text-h6 mb-1 ml-1">ประวัติการหกล้ม</p>
                  </v-btn>
                  <v-btn class="white--text" color="#066163">
                    <p class="text-h6 mb-1 ml-1">ฟอร์ม {{ e1 }}</p>
                  </v-btn>
                </v-card-text>
              </v-card>
            </v-stepper-content>
          </v-stepper-items>
        </v-stepper>
      </v-card-text>
    </v-col>
  </v-row>
</template>

<script>
import Fall from '~/components/Fall.vue'
import Short_Fbs_I from '~/components/Short-Fbs-I.vue'
import Tug from '~/components/Tug.vue'
import Knee_Score from '~/components/Knee-Score.vue'
import Risk_fall from '~/components/Risk-fall.vue'
import Sppb from '~/components/Sppb.vue'

export default {
  name: 'falling',
  data() {
    return {
      e1: 1,
      to_tgds: false,
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
    Fall,
    Short_Fbs_I,
    Risk_fall,
    Tug,
    Knee_Score,
    Sppb,
  },
  mounted() {
    //alert(JSON.stringify(this.$route.query))
  },
  methods: {
    // miniclog_return(data) {
    //   if (data >= 1 && data <= 3) {
    //     this.to_tgds = true
    //   } else if (data > 3) {
    //     this.to_tgds = false
    //   } else if (data == 0) {
    //     this.to_tgds = false
    //   }
    // },
    ciduse(data) {
      this.person_data = data
      //alert(this.person_data[0].age)

      this.name_show = this.person_data[0].fullname
      this.age_show = this.person_data[0].age
      this.name_cmu_show = this.person_data[0].name
      this.assessor_show = this.person_data[0].assessor
      this.cid_show = this.person_data[0].cid
      this.hn_show = this.person_data[0].hn

      this.person_show = true

      this.$refs.sendcidhnfall.receive_cidhn(this.person_data)
      this.$refs.sendcidhnshort_fbs_i.receive_cidhn(this.person_data)
      this.$refs.sendcidhntug.receive_cidhn(this.person_data)
      this.$refs.sendcidhnkneescore.receive_cidhn(this.person_data)
      this.$refs.sendcidhnriskfall.receive_cidhn(this.person_data)
      this.$refs.sendcidhnsppb.receive_cidhn(this.person_data)

      //alert(this.person_data[0].hn)
      // this.$refs.sendcidhnfraxscore.receive_cidhn(this.person_data)
    },
    clear_index_person() {
      this.name_show = ''
      this.age_show = ''
      this.name_cmu_show = ''
      this.assessor_show = ''
      this.cid_show = ''
      this.hn_show = ''
      this.person_show = false
      this.$refs.sendcidhnshort_fbs_i.clear_form()
      this.$refs.sendcidhntug.clear_form()
      this.$refs.sendcidhnkneescore.clear_form()
      this.$refs.sendcidhnriskfall.clear_form()
      this.$refs.sendcidhnsppb.clear_form()
      this.to_tgds = false
    },
    adl_frax_score_select(data) {
      this.person_data = data
      this.$refs.sendcidhnshort_fbs_i.short_fbs_i_select(this.person_data)
      this.$refs.sendcidhntug.tug_select(this.person_data)
      this.$refs.sendcidhnkneescore.knee_score_select(this.person_data)
      this.$refs.sendcidhnriskfall.riskfall_select(this.person_data)
      this.$refs.sendcidhnsppb.sppb_select(this.person_data)
      // this.$refs.sendcidtmse.tmse_select(this.person_data)
      // this.$refs.sendcidmoca.moca_select(this.person_data)

      // this.$refs.sendcidhnfraxscore.frax_score_select(this.person_data)
    },
  },
}
</script>


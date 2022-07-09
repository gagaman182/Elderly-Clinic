 <template>
  <v-row>
    <v-col>
      <v-card-text>
        <v-toolbar class="text-h5 white--text" color="#B689C0">
          <fa
            :icon="['fas', 'brain']"
            class="text-h4 mr-2"
          />
          Dementia
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
          <v-alert icon="mdi-comment-arrow-right " border="top" color="#E78EA9" dark>
          <div class="text-no-wrap secondary mb-2" style="width: 26rem">
              กรณีประเมินผล Mini-Cog ได้คะแนนมากกว่า >3 คะแนน = ปกติ 
            </div>
            <div class="text-no-wrap blue--text text-h5 text-decoration-underline" >
              ถือว่าประเมินเสร็จสิ้น
            </div>
            </br>
             <div class="text-no-wrap secondary" style="width: 32rem">
              กรณีประเมินผล Mini-Cog น้อยกว่าเท่ากับ ≤3 คะแนน = มีภาวะการรู้คิดบกพร่อง
            </div>
              <div class="text-no-wrap red--text text-h5 text-decoration-underline" >
              ต้องประเมิน TGDS-15 , TMSE และ MOCA ด้วย
            </div>
            <br />
          </v-alert>
        </div>
        <v-stepper v-model="e1">
          <v-stepper-header>
            <v-stepper-step :complete="e1 > 1" step="1" color="#B689C0">
              Mini-Cog
            </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 2" step="2" color="#B689C0">
              TGDS-15
            </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 3" step="3" color="#B689C0"> TMSE </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 4" step="4" color="#B689C0"> MOCA </v-stepper-step>
          </v-stepper-header>

          <v-stepper-items>
            <v-stepper-content step="1">
              <v-card>
                <v-card-text>
                  <Mini_Cog 
                  @miniclog="miniclog_return" 
                  @sendcid="ciduse" 
                  ref="sendcidhnminicog"
                  @call_adl_frax_score ="adl_frax_score_select"
                  @regisclearindex="clear_index_person" />
                </v-card-text>
                <v-card-text>
                <v-btn v-if ="to_tgds" class="white--text" color="#6A67CE" @click="e1 = 2">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">TGDS-15</p>
                </v-btn>
            
                 <v-btn  class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">ฟอร์ม {{e1}}</p>
                </v-btn>
                </v-card-text>
              </v-card>
            </v-stepper-content>

            <v-stepper-content step="2">
              <v-card>
                <v-card-text>
                  <Tgds ref="sendcidtgds"/>
                </v-card-text>
                <v-card-text>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                  <fa :icon="['fas', 'circle-left']" size="2x" /><p class="text-h6 mb-1 ml-1">Mini-Cog</p>
                </v-btn>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">TMSE</p>
                </v-btn>
               <v-btn  class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">ฟอร์ม {{e1}}</p>
                </v-btn>
            
                </v-card-text>
              </v-card>
            </v-stepper-content>

            <v-stepper-content step="3">
              <v-card>
                <v-card-text>
                  <Tmse   ref="sendcidtmse"/>
                </v-card-text>
                  <v-card-text>
                 <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                  <fa :icon="['fas', 'circle-left']" size="2x" /><p class="text-h6 mb-1 ml-1">TGDS-15</p>
                </v-btn>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 4">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">MOCA</p>
                </v-btn>
                <v-btn  class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">ฟอร์ม {{e1}}</p>
                </v-btn>
                  </v-card-text>
              </v-card>
            </v-stepper-content>
            <v-stepper-content step="4">
              <v-card>
                <v-card-text>
                  <Moca ref="sendcidmoca"/>
                </v-card-text>
                  <v-card-text>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                  <fa :icon="['fas', 'circle-left']" size="2x" /><p class="text-h6 mb-1 ml-1">TMSE</p>
                </v-btn>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">Mini-Cog</p>
                </v-btn>
                 <v-btn class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">ฟอร์ม {{e1}}</p>
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
import Mini_Cog from '~/components/Mini_Cog.vue'
import Tmse from '~/components/Tmse.vue'
import Tgds from '~/components/Tgds.vue'
import Moca from '~/components/Moca.vue'

export default {
  name: 'demetia',
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
    Mini_Cog,
    Tmse,
    Tgds,
    Moca,
  },
  mounted() {},
  methods: {
    miniclog_return(data) {
      if (data >= 1 && data <= 3) {
        this.to_tgds = true
      } else if (data > 3) {
        this.to_tgds = false
      } else if (data == 0) {
        this.to_tgds = false
      }
    },
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

      this.$refs.sendcidhnminicog.receive_cidhn(this.person_data)
      this.$refs.sendcidtgds.receive_cidhn(this.person_data)
      this.$refs.sendcidtmse.receive_cidhn(this.person_data)
      this.$refs.sendcidmoca.receive_cidhn(this.person_data)

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
      this.$refs.sendcidhnminicog.clear_form()
      this.$refs.sendcidtgds.clear_form()
      this.$refs.sendcidtmse.clear_form()
      this.$refs.sendcidmoca.clear_form()
      this.to_tgds = false
    },
    adl_frax_score_select(data) {
      this.person_data = data
      // this.$refs.sendcidhnminicog.mini_cog_select(this.person_data)
      this.$refs.sendcidtgds.tgds_select(this.person_data)
      this.$refs.sendcidtmse.tmse_select(this.person_data)
      this.$refs.sendcidmoca.moca_select(this.person_data)

      // this.$refs.sendcidhnfraxscore.frax_score_select(this.person_data)
    },
  },
}
</script>


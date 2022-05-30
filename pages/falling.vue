 <template>
  <v-row>
    <v-col>
      <v-card-text>
        <v-toolbar class="text-h5 white--text" color="#B689C0">
          <fa
            :icon="['fas', 'person-falling']"
            class="text-h4 mr-2"
          />
          Falling
        </v-toolbar>

        <div class="mt-2 mb-2">
          <v-alert icon="mdi-comment-arrow-right " border="top" color="#92BA92" dark>
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
              ประวัติการหกล้ม
            </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 2" step="2" color="#B689C0">
              Short_Fbs_I
            </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 3" step="3" color="#B689C0"> TUGT </v-stepper-step>
            <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 4" step="4" color="#B689C0"> Oxford Knee Score </v-stepper-step>
          <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 5" step="5" color="#B689C0"> บ้านเสี่ยงล้ม </v-stepper-step>
         <v-divider></v-divider>
            <v-stepper-step :complete="e1 > 6" step="6" color="#B689C0"> SPPB </v-stepper-step>
         
          
          </v-stepper-header>

          <v-stepper-items>
            <v-stepper-content step="1">
              <v-card>
                <v-card-text>
                  <!-- <Fall @miniclog="miniclog_return" /> -->
                  <Fall />
                </v-card-text>
                <v-card-text>
                <v-btn  class="white--text" color="#6A67CE" @click="e1 = 2">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">Short_Fbs_I</p>
                </v-btn>
            
                 <v-btn  class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">หัวข้อ {{e1}}</p>
                </v-btn>
                </v-card-text>
              </v-card>
            </v-stepper-content>

            <v-stepper-content step="2">
              <v-card>
                <v-card-text>
                  <Short_Fbs_I />
                </v-card-text>
                <v-card-text>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                  <fa :icon="['fas', 'circle-left']" size="2x" /><p class="text-h6 mb-1 ml-1">ประวัติการหกล้ม</p>
                </v-btn>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">TUGT</p>
                </v-btn>
               <v-btn  class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">หัวข้อ {{e1}}</p>
                </v-btn>
            
                </v-card-text>
              </v-card>
            </v-stepper-content>

            <v-stepper-content step="3">
              <v-card>
                <v-card-text>
                  <Tug/>
                </v-card-text>
                  <v-card-text>
                 <v-btn class="white--text" color="#6A67CE" @click="e1 = 2">
                  <fa :icon="['fas', 'circle-left']" size="2x" /><p class="text-h6 mb-1 ml-1">Short_Fbs_I</p>
                </v-btn>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 4">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">Oxford Knee Score</p>
                </v-btn>
                <v-btn  class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">หัวข้อ {{e1}}</p>
                </v-btn>
                  </v-card-text>
              </v-card>
            </v-stepper-content>
            <v-stepper-content step="4">
              <v-card>
                <v-card-text>
                  <Knee_Score />
                </v-card-text>
                  <v-card-text>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 3">
                  <fa :icon="['fas', 'circle-left']" size="2x" /><p class="text-h6 mb-1 ml-1">TUGT</p>
                </v-btn>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 5">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">บ้านเสี่ยงล้ม</p>
                </v-btn>
                 <v-btn class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">หัวข้อ {{e1}}</p>
                </v-btn>
                  </v-card-text>
              </v-card>
            </v-stepper-content>
             <v-stepper-content step="5">
              <v-card>
                <v-card-text>
                  <Risk_fall />
                </v-card-text>
                  <v-card-text>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 4">
                  <fa :icon="['fas', 'circle-left']" size="2x" /><p class="text-h6 mb-1 ml-1">บ้านเสี่ยงล้ม</p>
                </v-btn>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 6">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">SPPB</p>
                </v-btn>
                 <v-btn class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">หัวข้อ {{e1}}</p>
                </v-btn>
                  </v-card-text>
              </v-card>
            </v-stepper-content>
            <v-stepper-content step="6">
              <v-card>
                <v-card-text>
                  <Sppb />
                </v-card-text>
                  <v-card-text>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 5">
                  <fa :icon="['fas', 'circle-left']" size="2x" /><p class="text-h6 mb-1 ml-1">บ้านเสี่ยงล้ม</p>
                </v-btn>
                <v-btn class="white--text" color="#6A67CE" @click="e1 = 1">
                  <fa :icon="['fas', 'circle-right']" size="2x" /><p class="text-h6 mb-1 ml-1">ประวัติการหกล้ม</p>
                </v-btn>
                 <v-btn class="white--text" color="#066163">
                  <p class="text-h6 mb-1 ml-1">หัวข้อ {{e1}}</p>
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
import Frail_Scale from '~/components/Frail-Scale.vue'
import Mini_Cog from '~/components/Mini_Cog.vue'
import Tmse from '~/components/Tmse.vue'
import Tgds from '~/components/Tgds.vue'
import Moca from '~/components/Moca.vue'

import Msra from '~/components/Msra.vue'
import Knee_Screen from '~/components/Knee-Screen.vue'

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
    }
  },
  components: {
    Frail_Scale,
    Mini_Cog,
    Tmse,
    Tgds,
    Moca,
    Msra,
    Knee_Screen,

    Fall,
    Short_Fbs_I,
    Risk_fall,
    Tug,
    Knee_Score,
    Sppb,
  },
  mounted() {},
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
  },
}
</script>


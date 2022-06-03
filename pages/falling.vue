 <template>
  <v-row>
    <v-col>
      <v-card-text>
        <v-toolbar class="text-h5 white--text" color="#B689C0">
          <fa :icon="['fas', 'person-falling']" class="text-h4 mr-2" />
          Falling
        </v-toolbar>

        <div class="mt-2 mb-2">
          <v-alert
            icon="mdi-comment-arrow-right "
            border="top"
            color="#92BA92"
            dark
          >
            <div class="text-no-wrap secondary" style="width: 16rem">
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
            <div class="text-no-wrap secondary" style="width: 9rem">
              กรณีประเมินผล SPPB
            </div>
            <div
              class="text-no-wrap blue--text text-h5 text-decoration-underline"
            >
              ผลปกติ พบนักกายภาพ
            </div>
            <div
              class="text-no-wrap red--text text-h5 text-decoration-underline"
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
                  <!-- <Fall @miniclog="miniclog_return" /> -->
                  <Fall />
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
                  <Short_Fbs_I />
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
                  <Tug />
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
                  <Knee_Score />
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
                  <Risk_fall />
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
                  <Sppb />
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


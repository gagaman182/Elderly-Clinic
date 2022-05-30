<template>
  <v-row>
    <v-col
      ><v-card rounded>
        <v-card-text>
          <v-spacer />
          <!-- <v-card-title> -->
          <!-- <fa
              :icon="['fas', 'person-cane']"
              size="1x"
              class="mb-2 pr-2"
            /> -->
          <!-- บันทึกข้อมูลการประเมินคลินิกผู้สูงอายุ</v-card-title
          > -->
          <v-toolbar class="text-h5 white--text" color="#B689C0"
            >บันทึกข้อมูลการประเมินคลินิกผู้สูงอายุ</v-toolbar
          >

          <v-tabs background-color="#B689C0" center-active dark v-model="tab">
            <v-tab>fall</v-tab>
            <v-tab>riskfall</v-tab>
            <v-tab>ทะเบียน</v-tab>
            <v-tab>ADL</v-tab>
            <v-tab>FRAIL SCALE</v-tab>
            <v-tab>MINI-COG</v-tab>
            <v-tab>TMSE</v-tab>
            <v-tab>TGDS-15</v-tab>
            <v-tab>FRAX-SCORE</v-tab>
            <v-tab>MSRA</v-tab>
            <v-tab>KNEE-SCREEN</v-tab>
            <v-tab>KNEE-SCORE</v-tab>
            <v-tab>SHORT-FES-I</v-tab>
            <v-tab>THAI-FRAT</v-tab>
            <v-tab>TUG</v-tab>
            <v-tab>Sppb</v-tab>

            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Fall />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Risk_fall />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Regis />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Adl />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Frail_Scale />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Mini_Cog />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Tmse />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Tgds />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Frax_Score />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Msra />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Knee_Screen />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Knee_Score />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Short_Fbs_I />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Thai_Frat />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Tug />
                </v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item>
              <v-card>
                <v-card-text>
                  <Sppb />
                </v-card-text>
              </v-card>
            </v-tab-item>
          </v-tabs>
        </v-card-text> </v-card
    ></v-col>
  </v-row>
</template>

<script>
import Fall from '~/components/Fall.vue'
import Risk_fall from '~/components/Risk-fall.vue'
import Regis from '~/components/Regis.vue'
import Adl from '~/components/Adl.vue'
import Frail_Scale from '~/components/Frail-Scale.vue'
import Mini_Cog from '~/components/Mini_Cog.vue'
import Tmse from '~/components/Tmse.vue'
import Tgds from '~/components/Tgds.vue'
import Frax_Score from '~/components/Frax-Score.vue'
import Msra from '~/components/Msra.vue'
import Knee_Screen from '~/components/Knee-Screen.vue'
import Knee_Score from '~/components/Knee-Score.vue'
import Short_Fbs_I from '~/components/Short-Fbs-I.vue'
import Thai_Frat from '~/components/Thai-Frat'
import Tug from '~/components/Tug.vue'
import Sppb from '~/components/Sppb.vue'
export default {
  name: 'IndexPage',
  data() {
    return {}
  },
  components: {
    Regis,
    Adl,
    Frail_Scale,
    Mini_Cog,
    Tmse,
    Tgds,
    Frax_Score,
    Msra,
    Knee_Screen,
    Knee_Score,
    Short_Fbs_I,
    Thai_Frat,
    Tug,
    Sppb,
    Fall,
    Risk_fall,
  },
  mounted() {},
  methods: {},
}
</script>


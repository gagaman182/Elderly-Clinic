<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> ปนะเมินบ้านเสี่ยงล้ม </v-card-title>

          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            ไม่เกิน 2 ข้อ อยู่ในระดับ บ้านควรระวัง <br />
            3-4 ข้อ อยู่ในระดับ บ้านควรเร่งแก้ไข<br />
            5 ข้อขึ้นไป อยู่ในระดับ บ้านอันตรายควรปรับปรุงด่วน<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- --------1--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">10 ข้อประเมินบ้านเสี่ยงล้ม</h3>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall1"
                    label="1. สีที่ไม่ชัดเจน  "
                    value="1.1"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall2"
                    label="2. พื้นลื่นหรือมีพรม  "
                    value="1.2"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>

              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall3"
                    label="3. ของวางเกะกะ  ของวางอยู่สูง"
                    value="1.3"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>

              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall4"
                    label="4.  มืด  แสงสว่างบริเวณทางเดิน/บันได/ประตูน้อย"
                    value="1.4"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall5"
                    label="5. การเปลี่ยนระดับแสงกะทันหัน"
                    value="1.5"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall6"
                    label="6. ห้องน้ำ บันได ไม่มีราวจับพยุงตัว"
                    value="1.6"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall7"
                    label="7. ห้องนอนอยู่ชั้น 2 ต้องขึ้นบันได"
                    value="1.7"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall8"
                    label="8. เตียง  เก้าอี้  โซฟา  สูงหรือต่ำเกินไป"
                    value="1.8"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall9"
                    label="9. มีการเปลี่ยนระดับ ทางเดิน ธรณีประตู ทางเข้าห้องน้ำ"
                    value="1.9"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>
              <v-row
                ><v-col>
                  <v-checkbox
                    v-model="riskfall10"
                    label="10. การระบายอากาศไม่ดี"
                    value="1.10"
                    class="mb-2"
                    @change="risk_fall_check_1"
                  >
                  </v-checkbox>
                </v-col>
              </v-row>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ riskfall_all }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel text-h4 mb-2">รวมคะแนน</h3>
            </v-col>
            <v-col cols="12" md="2">
              <v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ total | json }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="3"
              ><h3 class="textlabel text-h4 mb-2">ผลการประเมิน</h3>
            </v-col>
            <v-col cols="12" md="6">
              <v-chip class="white--text text-h4" color="#79DAE8">
                {{ result }}
              </v-chip>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn
                  rounded
                  color="#6A67CE"
                  x-large
                  dark
                  @click="save_risk_fall"
                >
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div>
            </v-col>
          </v-row>
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Risk-fall',
  data() {
    return {
      riskfall1: '0',
      riskfall2: '0',
      riskfall3: '0',
      riskfall4: '0',
      riskfall5: '0',
      riskfall6: '0',
      riskfall7: '0',
      riskfall8: '0',
      riskfall9: '0',
      riskfall10: '0',
      riskfall_all: '0',
    }
  },
  methods: {
    risk_fall_check_1() {
      if (!this.riskfall1) {
        this.riskfall1 = '0'
      } else if (!this.riskfall2) {
        this.riskfall2 = '0'
      } else if (!this.riskfall3) {
        this.riskfall3 = '0'
      } else if (!this.riskfall4) {
        this.riskfall4 = '0'
      } else if (!this.riskfall6) {
        this.riskfall6 = '0'
      } else if (!this.riskfall7) {
        this.riskfall7 = '0'
      } else if (!this.riskfall8) {
        this.riskfall8 = '0'
      } else if (!this.riskfall9) {
        this.riskfall9 = '0'
      } else if (!this.riskfall10) {
        this.riskfall10 = '0'
      }
      this.riskfall_all =
        parseInt(this.riskfall1) +
        parseInt(this.riskfall2) +
        parseInt(this.riskfall3) +
        parseInt(this.riskfall4) +
        parseInt(this.riskfall5) +
        parseInt(this.riskfall6) +
        parseInt(this.riskfall7) +
        parseInt(this.riskfall8) +
        parseInt(this.riskfall9) +
        parseInt(this.riskfall10)
    },

    save_risk_fall() {
      alert('save')
    },
  },
  computed: {
    total: function () {
      if (this.riskfall_all)
        return (
          parseInt(this.riskfall1) +
          parseInt(this.riskfall2) +
          parseInt(this.riskfall3) +
          parseInt(this.riskfall4) +
          parseInt(this.riskfall5) +
          parseInt(this.riskfall6) +
          parseInt(this.riskfall7) +
          parseInt(this.riskfall8) +
          parseInt(this.riskfall9) +
          parseInt(this.riskfall10)
        )
    },
    result: function () {
      if (this.total >= 1 && this.total <= 2) return 'บ้านควรระวัง'
      else if (this.total >= 3 && this.total <= 4) return 'บ้านควรเร่งแก้ไข'
      else if (this.total >= 5) return 'บ้านอันตรายควรปรับปรุงด่วน'
    },
  },
}
</script>

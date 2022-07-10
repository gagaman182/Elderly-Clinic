<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> ประเมินบ้านเสี่ยงล้ม </v-card-title>

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
      riskfall_all: '',
      hn: '',
      cid: '',
      assessor_date: '',
      riskfall_selects: '',
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

    receive_cidhn(value) {
      // alert(value[0].hn)
      this.hn = value[0].hn
      this.cid = value[0].cid
      this.assessor_date = value[0].assessor_date
    },
    riskfall_select(value) {
      axios
        .post(`${this.$axios.defaults.baseURL}Risk_fall/risk_fall_select.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          this.riskfall_selects = response.data

          this.uhid = this.riskfall_selects[0].uhid
          this.riskfall1 = this.riskfall_selects[0].riskfall1
          this.riskfall2 = this.riskfall_selects[0].riskfall2
          this.riskfall3 = this.riskfall_selects[0].riskfall3
          this.riskfall4 = this.riskfall_selects[0].riskfall4
          this.riskfall5 = this.riskfall_selects[0].riskfall5
          this.riskfall6 = this.riskfall_selects[0].riskfall6
          this.riskfall7 = this.riskfall_selects[0].riskfall7
          this.riskfall8 = this.riskfall_selects[0].riskfall8
          this.riskfall9 = this.riskfall_selects[0].riskfall9
          this.riskfall10 = this.riskfall_selects[0].riskfall10
          this.riskfall_all = this.riskfall_selects[0].riskfall_all

          this.hn = this.riskfall_selects[0].hn
          this.cid = this.riskfall_selects[0].cid
          this.assessor_date = this.riskfall_selects[0].assessor_date
          // this.total = this.riskfall_selects[0].total
          // this.result = this.riskfall_selects[0].result
        })
    },
    riskfall_update: function () {
      if (!this.uhid) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ไม่พบข้อมูลupdate',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        axios
          .put(
            `${this.$axios.defaults.baseURL}Risk_fall/risk_fall_update.php`,
            {
              uhid: this.uhid,
              riskfall1: this.riskfall1,
              riskfall2: this.riskfall2,
              riskfall3: this.riskfall3,
              riskfall4: this.riskfall4,
              riskfall5: this.riskfall5,
              riskfall6: this.riskfall6,
              riskfall7: this.riskfall7,
              riskfall8: this.riskfall8,
              riskfall9: this.riskfall9,
              riskfall10: this.riskfall10,
              riskfall_all: this.riskfall_all,

              total: this.total,
              result: this.result,
              hn: this.hn,
              cid: this.cid,
              assessor_date: this.assessor_date,
            }
          )
          .then((response) => {
            this.message = response.data
            if (this.message[0].message === 'แก้ไขข้อมูลสำเร็จ') {
              this.$swal({
                title: 'สถานะการแก้ไข',
                text: this.message[0].message,
                icon: 'success',
                confirmButtonText: 'ตกลง',
              })
            } else {
              this.$swal({
                title: 'สถานะการแก้ไข',
                text: this.message[0].Message,
                icon: 'error',
                confirmButtonText: 'ตกลง',
              })
            }
          })
      }
    },
    save_risk_fall() {
      if (this.riskfall_selects.length > 0) {
        this.riskfall_update()
      } else {
        if (!this.hn || !this.cid || !this.assessor_date) {
          this.$swal({
            title: 'แจ้งเตือน',
            text: 'ระบุข้อมูลไม่ครบ',
            icon: 'error',
            confirmButtonText: 'ตกลง',
          })
        } else {
          const { v4: uuidv4 } = require('uuid')
          this.uhid = uuidv4()

          axios
            .post(
              `${this.$axios.defaults.baseURL}Risk_fall/risk_fall_add.php`,
              {
                uhid: this.uhid,
                riskfall1: this.riskfall1,
                riskfall2: this.riskfall2,
                riskfall3: this.riskfall3,
                riskfall4: this.riskfall4,
                riskfall5: this.riskfall5,
                riskfall6: this.riskfall6,
                riskfall7: this.riskfall7,
                riskfall8: this.riskfall8,
                riskfall9: this.riskfall9,
                riskfall10: this.riskfall10,
                riskfall_all: this.riskfall_all,

                total: this.total,
                result: this.result,
                hn: this.hn,
                cid: this.cid,
                assessor_date: this.assessor_date,
              }
            )
            .then((response) => {
              this.message = response.data

              if (this.message[0].message == 'เพิ่มข้อมูลสำเร็จ') {
                this.$swal({
                  title: 'สถานะการเพิ่ม',
                  text: this.message[0].message,
                  icon: 'success',
                  confirmButtonText: 'ตกลง',
                })
              } else {
                this.$swal({
                  title: 'สถานะการเพิ่ม',
                  text: this.message[0].message,
                  icon: 'error',
                  confirmButtonText: 'ตกลง',
                })
              }
            })
        }
      }
    },
    clear_form() {
      this.uhid = ''
      this.riskfall1 = '0'
      this.riskfall2 = '0'
      this.riskfall3 = '0'
      this.riskfall4 = '0'
      this.riskfall5 = '0'
      this.riskfall6 = '0'
      this.riskfall7 = '0'
      this.riskfall8 = '0'
      this.riskfall9 = '0'
      this.riskfall10 = '0'
      this.riskfall_all = ''

      this.hn = ''
      this.cid = ''
      this.assessor_date = ''
      this.total = ''
      this.result = ''
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
      if (this.total == 0) return '-'
      else if (this.total >= 1 && this.total <= 2) return 'บ้านควรระวัง'
      else if (this.total >= 3 && this.total <= 4) return 'บ้านควรเร่งแก้ไข'
      else if (this.total >= 5) return 'บ้านอันตรายควรปรับปรุงด่วน'
    },
  },
}
</script>

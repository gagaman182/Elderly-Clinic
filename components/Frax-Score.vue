<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> FRAX score </v-card-title>

          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            การพิจารณาค่าจุดตัดที่ถือเป็นข้อบ่งชี้ในการเริ่มใช้ยารักษาโรคกระดูกพรุน
            <br />
            - โอกาสเสี่ยงของการเกิดกระดูกหักที่ตำแหน่งสำคัญ ≥ 20 % <br />
            - โอกาสเสี่ยงของการเกิดกระดูกสะโพกหัก ≥ 3 %<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <iframe
            id="if1"
            width="100%"
            height="500"
            style="visibility: visible"
            src="https://www.sheffield.ac.uk/FRAX/tool.aspx?lang=th"
          >
          </iframe>
        </v-card-text>
        <v-card-text>
          <h3 class="textlabel mb-2">- ดัชนีมวลกาย</h3>
          <v-text-field
            outlined
            dense
            v-model="frax1"
            label="bmi..."
          ></v-text-field>
          <h3 class="textlabel mb-2">
            - โอกาสเสี่ยงของการเกิดกระดูกหักที่ตำแหน่งสำคัญ
          </h3>
          <v-text-field outlined dense v-model="frax2" label="ร้อยละ... ">
          </v-text-field>
          <h3 class="textlabel mb-2">- โอกาสเสี่ยงของการเกิดกระดูกสะโพกหัก</h3>
          <v-text-field outlined dense v-model="frax3" label="ร้อยละ...">
          </v-text-field>
          <v-row>
            <v-col cols="12" md="3"
              ><h3 class="textlabel text-h4 mb-2">ผลการประเมิน</h3>
            </v-col>
            <v-col cols="12" md="9">
              <v-chip class="white--text text-h6" color="#79DAE8">
                {{ result }}
              </v-chip>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_frax">
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
  name: 'Frax-Score',
  data() {
    return {
      uhid: '',
      frax1: '',
      frax2: '',
      frax3: '',
      hn: '',
      cid: '',

      assessor_date: '',
      frax_score_selects: '',
    }
  },
  methods: {
    save_frax() {
      if (this.frax_score_selects.length > 0) {
        this.frax_score_update()
      } else {
        if (
          !this.frax1 ||
          !this.frax2 ||
          !this.frax3 ||
          !this.hn ||
          !this.cid ||
          !this.assessor_date
        ) {
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
              `${this.$axios.defaults.baseURL}Frax_score/frax_score_add.php`,
              {
                uhid: this.uhid,
                frax1: this.frax1,
                frax2: this.frax2,
                frax3: this.frax3,
                hn: this.hn,
                cid: this.cid,
                assessor_date: this.assessor_date,
                result: this.result,
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
    receive_cidhn(value) {
      // alert(value[0].hn)
      this.hn = value[0].hn
      this.cid = value[0].cid
      this.assessor_date = value[0].assessor_date
    },
    frax_score_select(value) {
      axios
        .post(
          `${this.$axios.defaults.baseURL}Frax_score/frax_score_select.php`,
          {
            cid: value[0].cid,
            hn: value[0].hn,
            assessor_date: value[0].assessor_date,
          }
        )
        .then((response) => {
          this.frax_score_selects = response.data
          this.uhid = this.frax_score_selects[0].uhid
          this.frax1 = this.frax_score_selects[0].frax1
          this.frax2 = this.frax_score_selects[0].frax2
          this.frax3 = this.frax_score_selects[0].frax3
          this.hn = this.frax_score_selects[0].hn
          this.cid = this.frax_score_selects[0].cid
          this.assessor_date = this.frax_score_selects[0].assessor_date
          this.result = this.frax_score_selects[0].result
        })
    },
    frax_score_update: function () {
      if (!this.uhid) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ไม่พบข้อมูล',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        axios
          .put(
            `${this.$axios.defaults.baseURL}Frax_score/frax_score_update.php`,
            {
              uhid: this.uhid,
              frax1: this.frax1,
              frax2: this.frax2,
              frax3: this.frax3,
              hn: this.hn,
              cid: this.cid,
              assessor_date: this.assessor_date,
              result: this.result,
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
    clear_form() {
      this.uhid = ''
      this.frax1 = ''
      this.frax2 = ''
      this.frax3 = ''
      this.hn = ''
      this.cid = ''
      this.assessor_date = ''
      this.result = ''
    },
  },
  computed: {
    result: function () {
      if (this.frax2 >= 20 && this.frax3 >= 3)
        return 'โอกาสเสี่ยงของการเกิดกระดูกหักที่ตำแหน่งสำคัญ/โอกาสเสี่ยงของการเกิดกระดูกสะโพกหัก'
      else if (this.frax2 >= 20)
        return 'โอกาสเสี่ยงของการเกิดกระดูกหักที่ตำแหน่งสำคัญ'
      else if (this.frax3 >= 3) return 'โอกาสเสี่ยงของการเกิดกระดูกสะโพกหัก'
      else if (this.frax2 == 0 || this.frax3 == 0) return '-'
    },
  },
}
</script>

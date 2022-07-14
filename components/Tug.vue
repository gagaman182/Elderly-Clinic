<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> Timed Up and Go Test (TUGT) </v-card-title>
          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            12 วินาที ขึ้นไป มีภาวะเสี่ยงภาวะหกล้ม<br />
            น้อยกว่า 12 วินาที ปกติ <br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <v-row>
            <v-col cols="12" md="10">
              <!-- <v-row>
                <v-col cols="12" md="12">
                  <v-img
                    lazy-src="https://picsum.photos/id/11/10/6"
                    max-height="450"
                    max-width="100%"
                    src="https://picsum.photos/id/11/500/300"
                  ></v-img>
                </v-col>
              </v-row> -->
              <v-row>
                <v-col cols="12" md="12">
                  <h3 class="textlabel mb-2">จับเวลาได้</h3>
                </v-col>
                <v-col cols="12" md="6">
                  <v-text-field label="(นาที)" v-model="tug1"></v-text-field>
                </v-col>
                <v-col cols="12" md="6">
                  <v-text-field
                    label="(วินาที)"
                    v-model="tug2"
                  ></v-text-field> </v-col
              ></v-row>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ fbsi1 }}</span>
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
                {{ bar }}
              </v-chip>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_tug">
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div></v-col
            ></v-row
          >
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Tugt',
  data() {
    return {
      tug1: '',
      tug2: '',
      hn: '',
      cid: '',
      assessor_date: '',
      tug_selects: '',
    }
  },
  methods: {
    receive_cidhn(value) {
      //alert(value[0].hn)
      this.hn = value[0].hn
      this.cid = value[0].cid
      this.assessor_date = value[0].assessor_date
    },
    save_tug() {
      if (this.tug_selects.length > 0) {
        this.tug_update()
      } else {
        if (
          !this.hn ||
          !this.cid ||
          !this.assessor_date ||
          !this.tug1 ||
          !this.tug2
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
            .post(`${this.$axios.defaults.baseURL}Tugt/tugt_add.php`, {
              uhid: this.uhid,
              tug1: this.tug1,
              tug2: this.tug2,
              hn: this.hn,
              cid: this.cid,
              assessor_date: this.assessor_date,
              result: this.result,
            })
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
    tug_select(value) {
      axios
        .post(`${this.$axios.defaults.baseURL}Tugt/tugt_select.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          this.tug_selects = response.data
          this.uhid = this.tug_selects[0].uhid
          this.tug1 = this.tug_selects[0].tug1
          this.tug2 = this.tug_selects[0].tug2
          this.hn = this.tug_selects[0].hn
          this.cid = this.tug_selects[0].cid
          this.assessor_date = this.tug_selects[0].assessor_date
        })
    },
    tug_update: function () {
      if (!this.uhid) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ไม่พบข้อมูลupdate',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        axios
          .put(`${this.$axios.defaults.baseURL}Tugt/tugt_update.php`, {
            uhid: this.uhid,
            tug1: this.tug1,
            tug2: this.tug2,

            hn: this.hn,
            cid: this.cid,
            assessor_date: this.assessor_date,
            result: this.result,
          })
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
      this.tug1 = ''
      this.tug2 = ''
      this.hn = ''
      this.cid = ''
      this.assessor_date = ''
    },
  },
  computed: {
    result: function () {
      if (this.tug2 > 12) return 'มีภาวะเสี่ยงภาวะหกล้ม'
      else if (this.tug2 >= 1 && this.tug2 <= 12) return 'ปกติ'
      else if (this.tug2 == 0) return '-'
    },
  },
}
</script>

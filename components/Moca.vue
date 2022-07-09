<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title class="font-weight-bold">
            MONTREAL COGNITIVE ASSESSMENT (MOCA)
          </v-card-title>
          <v-divider />
        </v-card-text>
        <v-card-text>
          <!-- ----1------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                VISUOSPATIAL/EXECUTIVE
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <img src="@/assets/moca1_50.png" />
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 mt-15 text-h5"
                outlined
                label="คะแนน"
                type="number"
                min="0"
                max="5"
                placeholder="0"
                suffix="/5 คะแนน"
                v-model="moca1"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----2------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                NAMING
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="9">
              <img src="@/assets/moca2_50.png" />
            </v-col>
            <v-col cols="12" md="3">
              <v-text-field
                class="mr-8 mt-15 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                min="0"
                max="3"
                suffix="/3 คะแนน"
                v-model="moca2"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----3------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                MEMORY
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                อ่านชุดคำเหล่านี้แล้วให้ผู้ทดสอบทวนซ้ำ ทดสอบ 2 ครั้ง
                และถามซ้ำอีกครั้งหลัง 5 นาที
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4"> </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----4------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                ATTENTION
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                อ่านตัวเลขต่อไปนี้ตามลำดับ (1 ตัว/วินาที)
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                min="0"
                max="2"
                suffix="/2 คะแนน"
                v-model="moca4_1"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                อ่านออกตัวเลฃต่อไปนี้
                แล้วให้ผู้ทดสอบเคาะโต๊ะเมื่อได้ยินเสียงอ่านเลข '1'
                (ไม่มีคะแนนถ้าผิดเกิน 2 ครั้ง)
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                min="0"
                max="1"
                suffix="/1 คะแนน"
                v-model="moca4_2"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                เริ่มจาก 100 ลบไปเรื่อยๆที่ล่ะ7
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                min="0"
                max="3"
                suffix="/3 คะแนน"
                v-model="moca4_3"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----5------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                LANGUAGE
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                Repeat: ฉันรู้ว่าจอมเป็นคนเดียวที่มาช่วยงานช่วงนี้ /
                แมวมักซ่อนตัวอยู่หลังเก้าอี้เมื่อมีหมาอยู่ในห้อง
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                min="0"
                max="2"
                suffix="/2 คะแนน"
                v-model="moca5_1"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                Fluency / บอกคำที่ขึ้นต้นด้วยตัวอักษร 'ก' ให้มากที่สุด 1
                นาที</v-card-subtitle
              >
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                min="0"
                max="1"
                suffix="/1 คะแนน"
                v-model="moca5_2"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----6------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                ABSTRACTION
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                บอกความเหมือนระหว่าง 2 สิ่ง เช่น กล้วย-ส้ม:เป็นผลไม้
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                min="0"
                max="2"
                suffix="/2 คะแนน"
                v-model="moca6"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----7------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                DELAYED RECALL
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                ให้ทวนชุดคำที่จำไว้ก่อนหน้านี้โดยไม่มีการให้ตัวช่วย
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                min="0"
                max="5"
                suffix="/5 คะแนน"
                v-model="moca7"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----8------->
          <v-row>
            <v-col cols="12" md="8" class="mt-8">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                ORIENTATION
              </v-card-subtitle>
            </v-col>

            <v-col cols="12" md="4" class="mt-8">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                min="0"
                max="6"
                suffix="/6 คะแนน"
                v-model="moca8"
                @change="moca_chang"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row class="ml-6">
            <v-col cols="12" md="10"
              ><h3 class="textlabel text-h4 mb-2">รวมคะแนน</h3>
            </v-col>

            <v-col cols="12" md="2">
              <v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ moca_all | json }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_moca">
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
  name: 'Moca',
  data() {
    return {
      moca1: '0',
      moca2: '0',
      // moca3: '',
      moca4_1: '0',
      moca4_2: '0',
      moca4_3: '0',
      moca5_1: '0',
      moca5_2: '0',
      moca6: '0',
      moca7: '0',
      moca8: '0',
      moca_all: '0',
      hn: '',
      cid: '',
      assessor_date: '',
      moca_selects: '',
    }
  },
  methods: {
    moca_chang() {
      if (!this.moca1) {
        this.moca1 = '0'
      } else if (!this.moca2) {
        this.moca2 = '0'
      } else if (!this.moca4_1) {
        this.moca4_1 = '0'
      } else if (!this.moca4_2) {
        this.moca4_2 = '0'
      } else if (!this.moca4_3) {
        this.moca4_3 = '0'
      } else if (!this.moca5_1) {
        this.moca5_1 = '0'
      } else if (!this.moca5_2) {
        this.moca5_2 = '0'
      } else if (!this.moca6) {
        this.moca6 = '0'
      } else if (!this.moca7) {
        this.moca7 = '0'
      } else if (!this.moca8) {
        this.moca8 = '0'
      }
      this.moca_all =
        parseInt(this.moca1) +
        parseInt(this.moca2) +
        parseInt(this.moca4_1) +
        parseInt(this.moca4_2) +
        parseInt(this.moca4_3) +
        parseInt(this.moca5_1) +
        parseInt(this.moca5_2) +
        parseInt(this.moca6) +
        parseInt(this.moca7) +
        parseInt(this.moca8)
    },
    receive_cidhn(value) {
      //alert(value[0].hn)
      this.hn = value[0].hn
      this.cid = value[0].cid
      this.assessor_date = value[0].assessor_date
    },
    save_moca() {
      if (this.moca_selects.length > 0) {
        this.moca_update()
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
            .post(`${this.$axios.defaults.baseURL}Moca/moca_add.php`, {
              uhid: this.uhid,
              moca1: this.moca1,
              moca2: this.moca2,
              moca4_1: this.moca4_1,
              moca4_2: this.moca4_2,
              moca4_3: this.moca4_3,
              moca5_1: this.moca5_1,
              moca5_2: this.moca5_2,
              moca6: this.moca6,
              moca7: this.moca7,
              moca8: this.moca8,
              moca_all: this.moca_all,
              hn: this.hn,
              cid: this.cid,
              assessor_date: this.assessor_date,
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
    moca_select(value) {
      axios
        .post(`${this.$axios.defaults.baseURL}Moca/moca_select.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          this.moca_selects = response.data
          this.uhid = this.moca_selects[0].uhid
          this.moca1 = this.moca_selects[0].moca1
          this.moca2 = this.moca_selects[0].moca2
          this.moca4_1 = this.moca_selects[0].moca4_1
          this.moca4_2 = this.moca_selects[0].moca4_2
          this.moca4_3 = this.moca_selects[0].moca4_3
          this.moca5_1 = this.moca_selects[0].moca5_1
          this.moca5_2 = this.moca_selects[0].moca5_2
          this.moca6 = this.moca_selects[0].moca6
          this.moca7 = this.moca_selects[0].moca7
          this.moca8 = this.moca_selects[0].moca8
          this.moca_all = this.moca_selects[0].moca_all

          this.hn = this.moca_selects[0].hn
          this.cid = this.moca_selects[0].cid
          this.assessor_date = this.moca_selects[0].assessor_date
        })
    },
    moca_update: function () {
      if (!this.uhid) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ไม่พบข้อมูลupdate',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        axios
          .put(`${this.$axios.defaults.baseURL}Moca/moca_update.php`, {
            uhid: this.uhid,
            moca1: this.moca1,
            moca2: this.moca2,
            moca4_1: this.moca4_1,
            moca4_2: this.moca4_2,
            moca4_3: this.moca4_3,
            moca5_1: this.moca5_1,
            moca5_2: this.moca5_2,
            moca6: this.moca6,
            moca7: this.moca7,
            moca8: this.moca8,
            moca_all: this.moca_all,
            hn: this.hn,
            cid: this.cid,
            assessor_date: this.assessor_date,
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
      this.moca1 = '0'
      this.moca2 = '0'
      this.moca4_1 = '0'
      this.moca4_2 = '0'
      this.moca4_3 = '0'
      this.moca5_1 = '0'
      this.moca5_2 = '0'
      this.moca6 = '0'
      this.moca7 = '0'
      this.moca8 = '0'
      this.moca_all = '0'
      this.hn = ''
      this.cid = ''
      this.assessor_date = ''
    },
  },
}
</script>
<style>
</style>

<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title>
            Short Falls Effif icacy Scale International (Short FES-I)
          </v-card-title>
          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            ไม่กังวลหรือไม่กลัว = 1 <br />
            กังวลหรือ กลัวเล็กน้อย = 2 <br />
            กังวลหรือกลัวปานกลาง = 3 <br />
            กังวลหรือ กลัวมาก = 4 <br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- --------1--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">1. การใส่หรือถอดเสื้อผ้า</h3>
              <v-radio-group v-model="fbsi1" row>
                <v-radio label="ไม่กังวลหรือไม่กลัว" value="1"></v-radio>
                <v-radio label="กังวลหรือ กลัวเล็กน้อย" value="2"></v-radio>
                <v-radio label="กังวลหรือกลัวปานกลาง" value="3"></v-radio>
                <v-radio label="กังวลหรือ กลัวมาก" value="4"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ fbsi1 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------2--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">2. การอาบน้ำ</h3>
              <v-radio-group v-model="fbsi2" row>
                <v-radio label="ไม่กังวลหรือไม่กลัว" value="1"></v-radio>
                <v-radio label="กังวลหรือ กลัวเล็กน้อย" value="2"></v-radio>
                <v-radio label="กังวลหรือกลัวปานกลาง" value="3"></v-radio>
                <v-radio label="กังวลหรือ กลัวมาก" value="4"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ fbsi2 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------3--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">3. การนั่งหรือลุกจากเก้าอี้</h3>
              <v-radio-group v-model="fbsi3" row>
                <v-radio label="ไม่กังวลหรือไม่กลัว" value="1"></v-radio>
                <v-radio label="กังวลหรือ กลัวเล็กน้อย" value="2"></v-radio>
                <v-radio label="กังวลหรือกลัวปานกลาง" value="3"></v-radio>
                <v-radio label="กังวลหรือ กลัวมาก" value="4"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ fbsi3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------4--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">4. การขึ้นหรือลงบันได</h3>
              <v-radio-group v-model="fbsi4" row>
                <v-radio label="ไม่กังวลหรือไม่กลัว" value="1"></v-radio>
                <v-radio label="กังวลหรือ กลัวเล็กน้อย" value="2"></v-radio>
                <v-radio label="กังวลหรือกลัวปานกลาง" value="3"></v-radio>
                <v-radio label="กังวลหรือ กลัวมาก" value="4"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ fbsi4 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------5--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                5. การเอื้อมมือหยิบของเหนือศีรษะหรือก้มลงเก็บของบนพื้น
              </h3>
              <v-radio-group v-model="fbsi5" row>
                <v-radio label="ไม่กังวลหรือไม่กลัว" value="1"></v-radio>
                <v-radio label="กังวลหรือ กลัวเล็กน้อย" value="2"></v-radio>
                <v-radio label="กังวลหรือกลัวปานกลาง" value="3"></v-radio>
                <v-radio label="กังวลหรือ กลัวมาก" value="4"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ fbsi5 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------6--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">6. การเดินขึ้นหรือลงที่ลาดชัน</h3>
              <v-radio-group v-model="fbsi6" row>
                <v-radio label="ไม่กังวลหรือไม่กลัว" value="1"></v-radio>
                <v-radio label="กังวลหรือ กลัวเล็กน้อย" value="2"></v-radio>
                <v-radio label="กังวลหรือกลัวปานกลาง" value="3"></v-radio>
                <v-radio label="กังวลหรือ กลัวมาก" value="4"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ fbsi6 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------7--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                7. การออกไปร่วมกิจกรรมทางสังคม เช่น กิจกรรมทางศาสนา
                การวมญาติหรือกิจกรรมชมรม
              </h3>
              <v-radio-group v-model="fbsi7" row>
                <v-radio label="ไม่กังวลหรือไม่กลัว" value="1"></v-radio>
                <v-radio label="กังวลหรือ กลัวเล็กน้อย" value="2"></v-radio>
                <v-radio label="กังวลหรือกลัวปานกลาง" value="3"></v-radio>
                <v-radio label="กังวลหรือ กลัวมาก" value="4"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ fbsi7 }}</span>
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
          <!-- <v-row>
            <v-col cols="12" md="3"
              ><h3 class="textlabel text-h4 mb-2">ผลการประเมิน</h3>
            </v-col>
            <v-col cols="12" md="4">
              <v-chip class="white--text text-h4" color="#79DAE8">
                {{ result }}
              </v-chip>
            </v-col>
          </v-row> -->
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn
                  rounded
                  color="#6A67CE"
                  x-large
                  dark
                  @click="short_fbs_i_save()"
                >
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
  name: 'Short-Fbs-I',
  data() {
    return {
      fbsi1: '',
      fbsi2: '',
      fbsi3: '',
      fbsi4: '',
      fbsi5: '',
      fbsi6: '',
      fbsi7: '',
      hn: '',
      cid: '',
      assessor_date: '',
      short_fbs_i_selects: '',
    }
  },
  computed: {
    total: function () {
      if (
        !this.fbsi1 ||
        !this.fbsi2 ||
        !this.fbsi3 ||
        !this.fbsi4 ||
        !this.fbsi5 ||
        !this.fbsi6 ||
        !this.fbsi7
      )
        return 0
      return (
        parseInt(this.fbsi1) +
        parseInt(this.fbsi2) +
        parseInt(this.fbsi3) +
        parseInt(this.fbsi4) +
        parseInt(this.fbsi5) +
        parseInt(this.fbsi6) +
        parseInt(this.fbsi7)
      )
    },
    result: function () {
      // if (this.total >= 6 && this.total < 11) return 'บ่งบอกว่ามีภาวะซึมเศร้า '
      // else if (this.total >= 11) return 'มีภาวะซึมเศร้าแน่นอน'
      // else if (this.total < 6) return '-'
    },
  },
  methods: {
    receive_cidhn(value) {
      //alert(value[0].hn)
      this.hn = value[0].hn
      this.cid = value[0].cid
      this.assessor_date = value[0].assessor_date
    },
    short_fbs_i_save() {
      if (this.short_fbs_i_selects.length > 0) {
        this.short_fbs_i_update()
      } else {
        if (
          !this.hn ||
          !this.cid ||
          !this.assessor_date ||
          !this.fbsi1 ||
          !this.fbsi2 ||
          !this.fbsi3 ||
          !this.fbsi4 ||
          !this.fbsi5 ||
          !this.fbsi6 ||
          !this.fbsi7
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
              `${this.$axios.defaults.baseURL}Short_fbs_i/short_fbs_i_add.php`,
              {
                uhid: this.uhid,
                fbsi1: this.fbsi1,
                fbsi2: this.fbsi2,
                fbsi3: this.fbsi3,
                fbsi4: this.fbsi4,
                fbsi5: this.fbsi5,
                fbsi6: this.fbsi6,
                fbsi7: this.fbsi7,
                total: this.total,

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
    short_fbs_i_select(value) {
      axios
        .post(
          `${this.$axios.defaults.baseURL}Short_fbs_i/short_fbs_i_select.php`,
          {
            cid: value[0].cid,
            hn: value[0].hn,
            assessor_date: value[0].assessor_date,
          }
        )
        .then((response) => {
          this.short_fbs_i_selects = response.data
          this.uhid = this.short_fbs_i_selects[0].uhid
          this.fbsi1 = this.short_fbs_i_selects[0].fbsi1
          this.fbsi2 = this.short_fbs_i_selects[0].fbsi2
          this.fbsi3 = this.short_fbs_i_selects[0].fbsi3
          this.fbsi4 = this.short_fbs_i_selects[0].fbsi4
          this.fbsi5 = this.short_fbs_i_selects[0].fbsi5
          this.fbsi6 = this.short_fbs_i_selects[0].fbsi6
          this.fbsi7 = this.short_fbs_i_selects[0].fbsi7

          this.total = this.short_fbs_i_selects[0].total

          this.hn = this.short_fbs_i_selects[0].hn
          this.cid = this.short_fbs_i_selects[0].cid
          this.assessor_date = this.short_fbs_i_selects[0].assessor_date
        })
    },
    short_fbs_i_update: function () {
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
            `${this.$axios.defaults.baseURL}Short_fbs_i/short_fbs_i_update.php`,
            {
              uhid: this.uhid,
              fbsi1: this.fbsi1,
              fbsi2: this.fbsi2,
              fbsi3: this.fbsi3,
              fbsi4: this.fbsi4,
              fbsi5: this.fbsi5,
              fbsi6: this.fbsi6,
              fbsi7: this.fbsi7,
              total: this.total,

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
    clear_form() {
      this.uhid = ''
      this.fbsi1 = ''
      this.fbsi2 = ''
      this.fbsi3 = ''
      this.fbsi4 = ''
      this.fbsi5 = ''
      this.fbsi6 = ''
      this.fbsi7 = ''
      this.total = ''

      this.hn = ''
      this.cid = ''
      this.assessor_date = ''
    },
  },
}
</script>

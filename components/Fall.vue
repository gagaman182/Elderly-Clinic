<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> 
            ประวัติการหกล้ม
            <v-spacer></v-spacer>
            <v-btn class="mx-2" fab dark color="#243A73" @click="refresh">
              <v-icon dark> mdi-refresh </v-icon>
            </v-btn>
            <v-btn class="mx-2" fab dark color="#6A67CE" @click="dialog = true">
              <v-icon dark> mdi-card-search </v-icon>
            </v-btn></v-card-title>
             </v-card-title>
          <v-divider />
        </v-card-text>
        <v-card-text>
          <v-row>
            <v-col cols="12" md="12">
              <h3 class="textlabel mb-2 ml-4">
                ใน 6 เดือนที่ผ่านมาเคยหกล้มหรือไม่
              </h3>
              <v-radio-group v-model="fall" class="ml-8" row>
                <v-radio label="เคยหกล้ม" value="y"> </v-radio>
                <v-radio label="ไม่เคยหกล้ม" value="n"> </v-radio>
              </v-radio-group>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_fall">
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div></v-col
            ></v-row
          >
        </v-card-text>
      </v-card>
      <v-dialog v-model="dialog" width="600">
        <v-card>
          <v-card-title class="text-h5 white--text deep-purple darken-3">
            ค้นหาทะเบียน
          </v-card-title>

          <v-card-text>
            <div class="text-h6">ค้นหาจาก HN หรือ เลขบัตรประชาชน</div>
            <v-row
              ><v-col cols="12" md="6">
                <p class="text-h4 text--primary">HN</p>
                <v-autocomplete
                  v-model="hn_list"
                  :items="hn_lists"
                  item-text="hn"
                  item-value="hn"
                  dense
                  outlined
                  @change="hn_search()"
                ></v-autocomplete
              ></v-col>
              <v-col cols="12" md="6">
                <p class="text-h4 text--primary">เลขบัตรประชาชน</p>
                <v-autocomplete
                  v-model="cid_list"
                  :items="cid_lists"
                  item-text="cid"
                  item-value="cid"
                  dense
                  outlined
                  @change="cid_search()"
                ></v-autocomplete></v-col
            ></v-row>

            <p class="text-h6">รายละเอียด</p>
            <div class="text-h6 text--primary">
              <div class="d-flex flex-row ">HN : <div class="font-weight-bold blue--text"> {{ this.hn_show }}</div> เลขบัตรประชาชน: <div class="font-weight-bold blue--text">{{ this.cid_show }}</div></div> </br>
              <div class="d-flex flex-row ">ชื่อ-นามสกุล : <div class="font-weight-bold blue--text"> {{ this.name_show }}</div> อายุ: <div class="font-weight-bold blue--text">{{ this.age_show }}</div> ปี</div> </br>
             <div class="d-flex flex-row "> ศูนย์บริการ : <div class="font-weight-bold blue--text">{{ this.name_cmu_show }}</div> ผู้ประเมิน: <div class="font-weight-bold blue--text">{{ this.assessor_show }}</div></div>
            </div>
          </v-card-text>
          <v-card-actions>
            <v-specer />
            <v-btn dark color="#6A67CE" @click="search()" depressed>
              ตกลง
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </v-col>
  </v-row>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Fall',
  data() {
    return {
      fall: '',
      dialog: false,
      hn_list: '',
      hn_lists: '',
      cid_list: '',
      cid_lists: '',
      cid_searchs: '',
      name_age_show: '',
      name_show: '',
      age_show: '',
      name_cmu_show: '',
      assessor_show: '',
      cid_show: '',
      hn_show: '',
      assessor_date_show: '',
      hn: '',
      cid: '',
      assessor_date: '',

      fall_selects: '',
    }
  },
  mounted() {
    //ดึง list cid and hn
    this.fecth_search_cid()

    // ข้อมูลส่งมาจากหน้าหมอ
    if (this.$route.params == null) {
      //alert('nothing')
    } else {
      //console.log(this.$route.query)
      //แบบนี้ใช้กับ this.$router.resolve dataเป้น  query ทำ new tab
      var output = []
      output[0] = this.$route.query
      this.name_age_show = output

      this.cid_show = this.name_age_show[0].cid
      this.hn_show = this.name_age_show[0].hn
      this.assessor_date_show = this.name_age_show[0].assessor_date

      //แสดงรายชื่อของหน้า main ด้วย
      this.$emit('sendcid', this.name_age_show)
      //แบบนี้ใช้กับ this.$router.push dataเป้น params
      // console.log(this.$route.params.index)
      // this.name_age_show = this.$route.params.index
      // this.cid_show = this.$route.params.index[0].cid
      // this.hn_show = this.$route.params.index[0].hn
      // this.assessor_date_show = this.$route.params.index[0].assessor_date
      this.fall_select() //เรียกข้อมูลมาโชว์หน้า regis
      this.call_index() //เรียกข้อมูลมาโชว์หน้า adl frax score จาก index ไปเรียกต่อ
    }
  },
  methods: {
    async fecth_search_cid() {
      await axios
        .get(`${this.$axios.defaults.baseURL}Regis/search_cid_hn.php`)
        .then((response) => {
          this.cid_searchs = response.data

          this.hn_lists = this.cid_searchs
          this.cid_lists = this.cid_searchs
        })
    },
    refresh() {
      this.$emit('regisclearindex', 'clear')
      this.clear_form()
    },
    clear_form() {
      this.uhid = ''
      this.fall = ''
      this.hn = ''
      this.cid = ''
      this.assessor_date = ''
    },
    async cid_search() {
      //alert(this.cid_list)
      // this.search(this.cid_list)

      await axios
        .post(`${this.$axios.defaults.baseURL}Regis/search_name.php`, {
          search: 'cid',
          data_search: this.cid_list,
        })
        .then((response) => {
          this.name_age_show = response.data
          this.name_show = this.name_age_show[0].fullname
          this.age_show = this.name_age_show[0].age
          this.name_cmu_show = this.name_age_show[0].name
          this.assessor_show = this.name_age_show[0].assessor
          this.cid_show = this.name_age_show[0].cid
          this.hn_show = this.name_age_show[0].hn
          this.assessor_date_show = this.name_age_show[0].assessor_date
          this.clear_form() //หน้า regis clear เพราะไปเลือกจากการค้นหา
          this.$emit('regisclearindex', 'clear')
        })
    },
    async hn_search() {
      // this.search(this.hn_list)
      await axios
        .post(`${this.$axios.defaults.baseURL}Regis/search_name.php`, {
          search: 'hn',
          data_search: this.hn_list,
        })
        .then((response) => {
          this.name_age_show = response.data
          this.name_show = this.name_age_show[0].fullname
          this.age_show = this.name_age_show[0].age
          this.name_cmu_show = this.name_age_show[0].name
          this.assessor_show = this.name_age_show[0].assessor
          this.cid_show = this.name_age_show[0].cid
          this.hn_show = this.name_age_show[0].hn
          this.assessor_date_show = this.name_age_show[0].assessor_date
          this.clear_form() //หน้า regis clear เพราะไปเลือกจากการค้นหา
          this.$emit('regisclearindex', 'clear')
        })
    },
    search() {
      this.fall_select() //เรียกข้อมูลมาโชว์หน้า regis
      this.call_index() //เรียกข้อมูลมาโชว์หน้า adl frax score จาก index ไปเรียกต่อ
      if (!this.hn_list) {
        this.$emit('sendcid', this.name_age_show)
        this.dialog = false
        this.clear_txt_dialog()
      } else {
        this.$emit('sendcid', this.name_age_show)
        this.dialog = false
        this.clear_txt_dialog()
      }
    },
    call_index() {
      this.$emit('call_adl_frax_score', this.name_age_show)
    },
    clear_txt_dialog() {
      this.cid_list = ''
      this.hn_list = ''
      this.name_age_show = ''
      this.name_show = ''
      this.age_show = ''
      this.hn_show = ''
      this.cid_show = ''
    },
    receive_cidhn(value) {
      //alert(value[0].hn)
      this.hn = value[0].hn
      this.cid = value[0].cid
      this.assessor_date = value[0].assessor_date
    },
    save_fall() {
      if (this.fall_selects.length > 0) {
        this.fall_update()
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
            .post(`${this.$axios.defaults.baseURL}Fall/fall_add.php`, {
              uhid: this.uhid,
              fall: this.fall,
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
    fall_select() {
      axios
        .post(`${this.$axios.defaults.baseURL}Fall/fall_select.php`, {
          cid: this.cid_show,
          hn: this.hn_show,
          assessor_date: this.assessor_date_show,
        })
        .then((response) => {
          this.fall_selects = response.data
          this.uhid = this.fall_selects[0].uhid
          this.fall = this.fall_selects[0].fall
        })
    },
    fall_update: function () {
      if (!this.uhid) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ไม่พบข้อมูล',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        axios
          .put(`${this.$axios.defaults.baseURL}Fall/fall_update.php`, {
            uhid: this.uhid,
            fall: this.fall,
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
  },
}
</script>

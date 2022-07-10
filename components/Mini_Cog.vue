<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title>
            Mini-Cog <v-spacer></v-spacer>
            <v-btn class="mx-2" fab dark color="#243A73" @click="refresh">
              <v-icon dark> mdi-refresh </v-icon>
            </v-btn>
            <v-btn class="mx-2" fab dark color="#6A67CE" @click="dialog = true">
              <v-icon dark> mdi-card-search </v-icon>
            </v-btn></v-card-title
          >

          <v-divider />

          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            ≤3 คะแนน มีภาวะการรู้คิดบกพร่อง <br />
            >3 คะแนน ปกติ<br />
            * คะแนนเต็ม 5 คะแนน (ข้อ 1 = ไม่มีคะแนน, ข้อ 2 = 2 คะแนน ,ข้อ 3 = 3
            คะแนน )*
            <br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- --------1--------- -->
          <v-row>
            <v-col cols="12" md="11">
              <h3 class="textlabel mb-2">
                1. Three Word Registration ผู้ทดสอบบอกผู้ถูกทดสอบว่า
                “ให้ตั้งใจฟังดีๆ เดี๋ยวจะบอกคำ 3 คำ เมื่อพูดจบ
                แล้วให้พูดตามและจำไว้ เดี๋ยวจะกลับมาถามซ้ำ”
              </h3>
              <P CLASS="text-h6 green--text">หลานสาว สวรรค์ ภูเขา</P>
              <!-- <v-checkbox
                v-model="minicog1_1"
                label="หลานสาว"
                value="1"
              ></v-checkbox>
              <v-checkbox
                v-model="minicog1_2"
                label="สวรรค์"
                value="1"
              ></v-checkbox>
              <v-checkbox
                v-model="minicog1_3"
                label="ภูเขา"
                value="1"
              ></v-checkbox> -->
            </v-col>
            <!-- <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ minicog1 }}</span>
              </v-avatar>
            </v-col> -->
          </v-row>
          <!-- ------------2------------- -->
          <v-row>
            <v-col cols="12" md="12">
              <v-divider />
            </v-col>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                2. Clock Drawing
                ให้ผู้ถูกทดสอบวาดรูปนาฬิกาโดยใส่ตัวเลขและเข็มนาฬิกาที่เวลา 11.10
                น.
              </h3>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ minicog2 }}</span>
              </v-avatar>
            </v-col>
            <v-col cols="12" md="6">
              <v-text-field
                outlined
                dense
                label="คลิกช่องเพื่อเลือกรูปภาพ"
                @click="pickFile"
                v-model="imageName"
                prepend-icon="mdi-file-image"
              ></v-text-field>
              <input
                type="file"
                style="display: none"
                ref="image"
                accept="image/jpeg, image/jpg, image/png"
                @change="onFilePicked"
              />
              <img :src="imageUrl" height="600" width="800" v-if="imageUrl" />
              <!-- <button type="button" @click="uploadFile">Upload file</button> -->
            </v-col>
            <v-col cols="12" md="6">
              <v-btn
                dark
                rounded
                color="#E04DB0"
                type="button"
                @click="uploadFile"
                >อัพโหลดรูป</v-btn
              >
            </v-col>

            <v-col cols="12" md="10">
              <v-radio-group v-model="minicog2" row>
                <v-radio label="ได้คะแนน" value="2"></v-radio>
                <v-radio label="ไม่ได้คะแนน " value="0"></v-radio>
              </v-radio-group>
            </v-col>
          </v-row>

          <!-- --------3--------- -->
          <v-row>
            <v-col cols="12" md="12">
              <v-divider />
            </v-col>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                3. Three Word Recall ให้ผู้ถูกทดสอบบอกคำ 3
                คำที่ให้จำเมื่อสักครู่ว่ามีอะไรบ้าง
              </h3>
              <v-checkbox
                v-model="minicog3_1"
                label="หลานสาว"
                value="1"
                @change="minicog_3"
              ></v-checkbox>
              <v-checkbox
                v-model="minicog3_2"
                label="สวรรค์"
                value="1"
                @change="minicog_3"
              ></v-checkbox>
              <v-checkbox
                v-model="minicog3_3"
                label="ภูเขา"
                value="1"
                @change="minicog_3"
              ></v-checkbox>
            </v-col>

            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ minicog3 }}</span>
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
                {{ miniclogtosend }}
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
                  @click="save_minicog"
                >
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div>
            </v-col>
          </v-row>
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
  name: 'Mini-Cog',
  data() {
    return {
      imageUrl: '',
      imageFile: null,
      imageName: '',
      // cid: '3901101272704',
      minicog1_1: '',
      minicog1_2: '',
      minicog1_3: '',
      minicog2: '0',
      minicog3: '0',
      minicog3_1: '0',
      minicog3_2: '0',
      minicog3_3: '0',
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

      mini_cog_selects: '',
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
      this.mini_cog_select() //เรียกข้อมูลมาโชว์หน้า regis
      this.call_index() //เรียกข้อมูลมาโชว์หน้า adl frax score จาก index ไปเรียกต่อ
    }
  },
  methods: {
    minicog_3() {
      if (!this.minicog3_1) {
        this.minicog3_1 = '0'
      } else if (!this.minicog3_2) {
        this.minicog3_2 = '0'
      } else if (!this.minicog3_3) {
        this.minicog3_3 = '0'
      }
      this.minicog3 =
        parseInt(this.minicog3_1) +
        parseInt(this.minicog3_2) +
        parseInt(this.minicog3_3)
    },
    pickFile() {
      this.$refs.image.click()
    },
    onFilePicked(e) {
      const files = e.target.files
      if (files[0] !== undefined) {
        this.imageName = files[0].name
        if (this.imageName.lastIndexOf('.') <= 0) {
          return
        }
        const fr = new FileReader()
        fr.readAsDataURL(files[0])
        fr.addEventListener('load', () => {
          this.imageUrl = fr.result
          this.imageFile = files[0]
        })
      } else {
        this.imageName = ''
        this.imageFile = ''
        this.imageUrl = ''
      }
    },
    uploadFile() {
      if (!this.imageFile) {
        alert('no pic')
      } else {
        let formData = new FormData()
        formData.append('file', this.imageFile)
        formData.append('cid', this.cid)
        axios
          .post(`${this.$axios.defaults.baseURL}uploads/upload.php`, formData, {
            headers: {
              'Content-Type': 'multipart/form-data',
            },
            cid: this.cid,
          })
          .then(function (response) {
            if (!response.data) {
              alert('File not uploaded.')
            } else {
              alert(response.data)
            }
          })
          .catch(function (error) {
            console.log(error)
          })
      }
    },
    refresh() {
      this.$emit('regisclearindex', 'clear')
      this.clear_form()
    },
    clear_form() {
      this.uhid = ''
      this.minicog2 = ''
      this.minicog3_1 = ''
      this.minicog3_2 = ''
      this.minicog3_3 = ''
      this.minicog3 = ''
      this.hn = ''
      this.cid = ''
      this.assessor_date = ''
      this.total = ''
      this.result = ''
    },
    // idcard and hn
    async fecth_search_cid() {
      await axios
        .get(`${this.$axios.defaults.baseURL}Regis/search_cid_hn.php`)
        .then((response) => {
          this.cid_searchs = response.data

          this.hn_lists = this.cid_searchs
          this.cid_lists = this.cid_searchs
        })
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
      this.mini_cog_select() //เรียกข้อมูลมาโชว์หน้า regis
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
      // alert(value[0].hn)
      this.hn = value[0].hn
      this.cid = value[0].cid
      this.assessor_date = value[0].assessor_date
    },
    save_minicog() {
      // alert(this.minicog2)
      // alert(this.minicog3)
      // alert(this.total)
      // alert(this.result)
      // alert(this.hn)
      // alert(this.cid)
      // alert(this.assessor_date)

      if (this.mini_cog_selects.length > 0) {
        this.mini_cog_update()
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
            .post(`${this.$axios.defaults.baseURL}Mini_cog/mini_cog_add.php`, {
              uhid: this.uhid,
              minicog2: this.minicog2,
              minicog3_1: this.minicog3_1,
              minicog3_2: this.minicog3_2,
              minicog3_3: this.minicog3_3,
              minicog3: this.minicog3,
              hn: this.hn,
              cid: this.cid,
              assessor_date: this.assessor_date,
              total: this.total,
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
    mini_cog_select() {
      // alert(this.cid_show)
      // alert(this.hn_show)
      // alert(this.assessor_date_show)
      axios
        .post(`${this.$axios.defaults.baseURL}Mini_cog/mini_cog_select.php`, {
          cid: this.cid_show,
          hn: this.hn_show,
          assessor_date: this.assessor_date_show,
        })
        .then((response) => {
          this.mini_cog_selects = response.data
          this.uhid = this.mini_cog_selects[0].uhid
          this.minicog2 = this.mini_cog_selects[0].minicog2
          this.minicog3_1 = this.mini_cog_selects[0].minicog3_1
          this.minicog3_2 = this.mini_cog_selects[0].minicog3_2
          this.minicog3_3 = this.mini_cog_selects[0].minicog3_3
          this.minicog3 = this.mini_cog_selects[0].minicog3
          this.hn = this.mini_cog_selects[0].hn
          this.cid = this.mini_cog_selects[0].cid
          this.assessor_date = this.mini_cog_selects[0].assessor_date
          this.total = this.mini_cog_selects[0].total
          this.result = this.mini_cog_selects[0].result
          // alert(this.total)
          // this.$emit('miniclog', this.total)
        })
    },
    mini_cog_update: function () {
      if (!this.uhid) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ไม่พบข้อมูล',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        axios
          .put(`${this.$axios.defaults.baseURL}Mini_cog/mini_cog_update.php`, {
            uhid: this.uhid,
            minicog2: this.minicog2,
            minicog3_1: this.minicog3_1,
            minicog3_2: this.minicog3_2,
            minicog3_3: this.minicog3_3,
            minicog3: this.minicog3,
            hn: this.hn,
            cid: this.cid,
            assessor_date: this.assessor_date,
            total: this.total,
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
  },
  computed: {
    // minicog3: function () {
    //   if (!this.minicog3_1 || !this.minicog3_2 || !this.minicog3_3) return 0
    //   return (
    //     parseInt(this.minicog3_1) +
    //     parseInt(this.minicog3_2) +
    //     parseInt(this.minicog3_3)
    //   )
    // },
    total: function () {
      // if (!this.minicog2 || !this.minicog3) return 0
      // if (!this.minicog3) return 0
      if (!this.minicog2) return parseInt(this.minicog3)
      else if (!this.minicog3) return parseInt(this.minicog2)

      return parseInt(this.minicog2) + parseInt(this.minicog3)
    },
    result: function () {
      if (this.total >= 1 && this.total <= 3) return 'มีภาวะการรู้คิดบกพร่อง'
      else if (this.total > 3) return 'ปกติ'
      else if (this.total == 0) return '-'
    },
    miniclogtosend: function () {
      this.$emit('miniclog', this.total)
    },
  },
}
</script>

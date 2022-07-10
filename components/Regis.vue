<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title>
            ทะเบียนผู้สูงอายุ<v-spacer></v-spacer>
 <v-btn class="mx-2" fab dark color="#243A73" @click="refresh">
              <v-icon dark> mdi-refresh </v-icon>
            </v-btn>
            <v-btn class="mx-2" fab dark color="#6A67CE" @click="dialog = true">
              <v-icon dark> mdi-card-search </v-icon>
            </v-btn>
          </v-card-title>

          <v-divider />
        </v-card-text>

        <v-card-text
          ><v-row>
            <v-col cols="12" md="3">
              <h3 class="textlabel mb-2">ศูนย์บริการ</h3>
              <v-select
                solo
                :items="cmus"
                v-model="cmu"
                item-text="name"
                item-value="id"
                outlined
                dense
            /></v-col>
            <v-col cols="12" md="3">
              <h3 class="textlabel mb-2">ผู้ประเมิน</h3>
              <v-text-field solo v-model="assessor" outlined dense
            /></v-col>
            <v-col cols="12" md="3">
              <h3 class="textlabel mb-2">วันที่ประเมิน</h3>

              <!-- <v-menu
                ref="menu"   กรณีจะใช้ปุ่มกด ใส่ใน  v-menu-->
              <v-menu
                v-model="menu"
                :close-on-content-click="false"
                max-width="290"
              >
                <template v-slot:activator="{ on, attrs }">
                  <v-text-field
                    solo
                    :value="computedDateFormattedMomentjs"
                    clearable
                    outlined
                    dense
                    prepend-icon="mdi-calendar"
                    readonly
                    v-bind="attrs"
                    v-on="on"
                    @click:clear="assessor_date = null"
                  ></v-text-field>
                  <!-- clearable ปุ่ม กากบาท -->
                </template>
                <v-date-picker locale="th-TH" v-model="assessor_date">
                  <!-- @change="menu = false" กรณีไม่ใช้ปุ่มกด ใส่ใน v-date-picker -->
                  <v-spacer></v-spacer>

                  <v-btn text color="#6A67CE" @click="menu = false">
                    ตกลง
                  </v-btn>
                </v-date-picker>
              </v-menu>
            </v-col>
            <v-col cols="12" md="3">
              <h3 class="textlabel mb-2">เลขบัตรประชาชน</h3>
              <v-text-field
                solo
                v-model="cid"
                outlined
                dense
                type="number"
                counter="13"
                :rules="cid_rule"
            /></v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="2">
              <h3 class="textlabel mb-2">HN</h3>
              <v-text-field solo v-model="hn" outlined dense
            /></v-col>
            <v-col cols="12" md="2">
              <h3 class="textlabel mb-2">ชื่อ</h3>
              <v-text-field solo v-model="name" outlined dense
            /></v-col>
            <v-col cols="12" md="2">
              <h3 class="textlabel mb-2">นามสกุล</h3>
              <v-text-field solo v-model="surname" outlined dense
            /></v-col>
            <v-col cols="12" md="3">
              <h3 class="textlabel mb-2">วัน/เดือน/ปี เกิด</h3>
              <v-menu
                ref="menu1"
                v-model="menu1"
                :close-on-content-click="false"
                transition="scale-transition"
                offset-y
                min-width="auto"
              >
                <template v-slot:activator="{ on, attrs }">
                  <v-text-field
                    solo
                    :value="computedDateFormattedMomentjs2"
                    prepend-icon="mdi-cake "
                    clearable
                    readonly
                    outlined
                    dense
                    v-bind="attrs"
                    v-on="on"
                    @click:clear="birthday = null"
                  ></v-text-field>
                  <!-- clearable
                   @click:clear="birthday = null" ปุ่มกากบาท -->
                </template>
                <v-date-picker
                  v-model="birthday"
                  locale="th-TH"
                  :active-picker.sync="activePicker"
                  :max="
                    new Date(
                      Date.now() - new Date().getTimezoneOffset() * 60000
                    )
                      .toISOString()
                      .substr(0, 10)
                  "
                  min="1930-01-01"
                  @change="$refs.menu1.save(birthday)"
                ></v-date-picker> </v-menu
            ></v-col>
            <v-col cols="12" md="1">
              <h3 class="textlabel mb-2">อายุ</h3>
              <v-text-field solo v-model="age" outlined dense type="number"
            /></v-col>
            <v-col cols="12" md="2">
              <h3 class="textlabel mb-2">เบอร์โทรศัพท์</h3>
              <v-text-field solo v-model="tel" outlined dense
            /></v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="5">
              <h3 class="textlabel mb-2">ที่อยู่</h3>

              <v-textarea
                solo
                v-model="address"
                outlined
                dense
                rows="1"
              ></v-textarea>
            </v-col>
            <v-col cols="12" md="1">
              <h3 class="textlabel mb-2">หมู่ที่</h3>
              <v-text-field v-model="moo" outlined dense />
            </v-col>
            <v-col cols="12" md="2">
              <h3 class="textlabel mb-2">จังหวัด</h3>

              <v-autocomplete
                label="--เลือก--"
                v-model="chw_code"
                :items="chw_codes"
                item-text="name"
                item-value="code"
                dense
                outlined
                @change="chwChange"
              ></v-autocomplete>
            </v-col>
            <v-col cols="12" md="2">
              <h3 class="textlabel mb-2">อำเภอ</h3>

              <v-autocomplete
                label="--เลือก--"
                v-model="amp_code"
                :items="amp_codes"
                item-text="name"
                item-value="code"
                dense
                outlined
                @change="ampChange"
              ></v-autocomplete>
            </v-col>
            <v-col cols="12" md="2">
              <h3 class="textlabel mb-2">ตำบล</h3>

              <v-autocomplete
                label="--เลือก--"
                v-model="tmb_code"
                :items="tmb_codes"
                item-text="name"
                item-value="code"
                dense
                outlined
              ></v-autocomplete>
            </v-col>
          </v-row>
          <v-divider class="mt-5 mb-5" />
          <v-row>
            <v-col cols="12" md="12">
              <h3 class="textlabel">ส่งตัวมาจาก</h3>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="4">
              <h3 class="textlabel mb-2"></h3>

              <v-checkbox
                v-model="refer_pcu"
                label="Refer จากรพ.สต"
                color="#6A67CE"
                hide-details
                @change="check_pcu($event)"
              ></v-checkbox>
            </v-col>
            <v-col cols="12" md="8">
              <h3 class="textlabel mb-4"></h3>
              <v-select
                :disabled="refer_pcu_detail_show"
                label="--เลือก--"
                solo
                :items="refer_pcu_details"
                v-model="refer_pcu_detail"
                outlined
                item-text="name"
                item-value="id"
                dense
            /></v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="4">
              <h3 class="textlabel mb-2"></h3>

              <v-checkbox
                v-model="refer_cmu"
                label="ส่งมาจาก CMU"
                color="#6A67CE"
                hide-details
                @change="check_cmu($event)"
              ></v-checkbox>
            </v-col>
            <v-col cols="12" md="8">
              <h3 class="textlabel mb-4"></h3>
              <v-select
                :disabled="refer_cmu_detail_show"
                solo
                label="--เลือก--"
                :items="refer_cmu_details"
                v-model="refer_cmu_detail"
                outlined
                item-text="name"
                item-value="id"
                dense
            /></v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="12">
              <v-checkbox
                v-model="walkin"
                label="Walk in"
                color="#6A67CE"
                hide-details
              ></v-checkbox>
            </v-col>
          </v-row>
          <v-divider class="mt-5 mb-5" />
          <v-row>
            <v-col cols="12" md="12">
              <h3 class="textlabel mb-2">อาการ</h3>
            </v-col>
            <v-col cols="12" md="4">
              <h3 class="textlabel mb-2"></h3>

              <v-checkbox
                v-model="dementia"
                label="Dementia"
                color="#6A67CE"
                hide-details
              ></v-checkbox>
            </v-col>
            <v-col cols="12" md="4">
              <h3 class="textlabel mb-2"></h3>

              <v-checkbox
                v-model="falling"
                label="Falling"
                color="#6A67CE"
                hide-details
              ></v-checkbox>
            </v-col>
          </v-row>
          <v-divider class="mt-5 mb-5" />
          <v-row>
            <v-col cols="12" md="4">
              <h3 class="textlabel mb-2">โรคประจำตัว</h3>
              <v-radio-group
                v-model="disease"
                @change="check_disease($event)"
                row
              >
                <v-radio label="ไม่มี" value="n"></v-radio>
                <v-radio label="มี" value="y"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="8">
              <h3 class="textlabel mb-4"></h3>

              <v-textarea
                solo
                label="คือ..."
                :disabled="disease_show"
                solo
                v-model="disease_detail"
                outlined
                dense
                rows="1"
              ></v-textarea>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="4">
              <h3 class="textlabel mb-2">ยาที่ใช้ประจำ</h3>
              <v-radio-group v-model="drug" @change="check_drug($event)" row>
                <v-radio label="ไม่มี" value="n"></v-radio>
                <v-radio label="มี" value="y"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="8">
              <h3 class="textlabel mb-4"></h3>

              <v-textarea
                solo
                label="คือ..."
                :disabled="drug_show"
                solo
                v-model="drug_detail"
                outlined
                dense
                rows="1"
              ></v-textarea>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_regis">
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div>
            </v-col></v-row
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
// เพื่อสำหรับ dateformat วันที่
import moment from 'moment'
import { format, parseISO } from 'date-fns'
export default {
  name: 'Regis',
  data() {
    return {
      uhid: '',
      cmus: '',
      //[
      // 'ศูนย์แพทยชุมชนสามตำบล',
      // 'ศูนย์แพทยชุมชนควนลัง',
      // 'ศูนย์แพทยชุมชนพะตง',
      // 'ศูนย์แพทยชุมชนคลองแห',
      // 'ศูนย์บริการสาธารณสุขเพชรเกษม',
      // ],
      menu: false,
      menu1: false,
      cmu: '',
      assessor: '',
      // assessor_date: new Date().toISOString().substr(0, 10),ใช้อันไหนก็ได้
      assessor_date: format(parseISO(new Date().toISOString()), 'yyyy-MM-dd'),
      cid: '',
      cid_rule: [
        (v) => !!v || 'ข้อมูลห้ามเป็นว่าง',
        (v) => (v && v.length <= 13) || 'ใส่ข้อมูลเกินจำนวนที่กำหนด',
      ],
      hn: '',
      name: '',
      surname: '',
      activePicker: null,
      birthday: null,
      age: '',

      tel: '',
      address: '',
      moo: '',
      chw_codes: '',
      chw_code: '',
      amp_codes: '',
      amp_code: '',
      tmb_codes: '',
      tmb_code: '',
      refer_pcu: '',
      refer_pcu_detail: '',
      refer_pcu_details: [
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลควนลัง',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลคูเต่า',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลคอหงส์',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลคลองแห',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลคลองอู่ตะเภา',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลฉลุง',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลทุ่งใหญ่',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลหูแร่',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลหินผุด',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลทุ่งตำเสา',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลท่าข้าม',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลน้ำน้อย',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลท่าจีน',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลบ้านพรุ',
        // 'สถานีอนามัยเฉลิมพระเกียรติ 60 พรรษา นวมินทราชินี',
        // 'โรงพยาบาลส่งเสริมสุขภาพตำบลทุ่งปรือ',
      ],
      refer_pcu_detail_show: true,
      refer_cmu: '',
      refer_cmu_detail: '',
      refer_cmu_details: [
        // 'ศูนย์แพทยชุมชนสามตำบล',
        // 'ศูนย์แพทยชุมชนควนลัง',
        // 'ศูนย์แพทยชุมชนพะตง',
        // 'ศูนย์แพทยชุมชนคลองแห',
      ],
      refer_cmu_detail_show: true,
      walkin: '',
      dementia: '',
      falling: '',
      disease: 'n',
      disease_detail: '',
      disease_show: true,
      drug: 'n',
      icon: '',
      drug_show: true,
      dialog: false,
      dementia: '',
      falling: '',
      message: '',
      cid_searchs: '',
      cid_list: '',
      cid_lists: '',
      hn_list: '',
      hn_lists: '',
      name_age_show: '',
      name_show: '-',
      age_show: '-',
      name_cmu_show: '-',
      assessor_show: '-',
      cid_show: '-',
      hn_show: '-',
      assessor_date_show: '',
      regis_selects: '',
    }
  },

  mounted() {
    // ดึงตำบล
    this.fecth_tmb_code()
    // ดึงอำเภอ
    this.fecth_amp_code()
    // ดึงจังหวัด
    this.fecth_chw_code()
    //cmus
    this.fetch_cmu()
    //refer from cmu
    this.fetch_refer_cmu()
    //refer from pcus
    this.fetch_refer_pcu()
    //ดึง list cid and hn
    this.fecth_search_cid()

    // ข้อมูลส่งมาจากหน้าหมอ
    if (!this.$route.query) {
      //alert('nothing')
    } else {
      //console.log(this.$route.query)
      //แบบนี้ใช้กับ this.$router.resolve dataเป้น  query ทำ new tab
      var output = []
      output[0] = this.$route.query

      if (!output[0].fullname) {
      } else {
        const datadecode = {
          fullname: window.atob(output[0].fullname),
          age: window.atob(output[0].age),
          // name: window.atob(output[0].name),
          assessor: window.atob(output[0].assessor),
          cid: window.atob(output[0].cid),
          hn: window.atob(output[0].hn),
          assessor_date: window.atob(output[0].assessor_date),
        }
        var output2 = []
        output2[0] = datadecode
        this.name_age_show = output2
        console.log(this.name_age_show)

        this.cid_show = this.name_age_show[0].cid
        this.hn_show = this.name_age_show[0].hn
        this.assessor_date_show = this.name_age_show[0].assessor_date

        //แสดงรายชื่อของหน้า main ด้วย
        this.$emit('sendcid', this.name_age_show)

        this.regis_select() //เรียกข้อมูลมาโชว์หน้า regis
        this.call_index()
      } //เรียกข้อมูลมาโชว์หน้า adl frax score จาก index ไปเรียกต่อ
    }
  },
  computed: {
    computedDateFormattedMomentjs() {
      return this.assessor_date ? moment(this.assessor_date).format('L') : ''
    },
    computedDateFormattedMomentjs2() {
      return this.birthday ? moment(this.birthday).format('L') : ''
    },
    // computedDateFormattedDatefns() {
    //   return this.date ? format(parseISO(this.date), 'EEEE, MMMM do yyyy') : ''
    // },
  },
  watch: {
    menu1(val) {
      val && setTimeout(() => (this.activePicker = 'YEAR'))
    },
  },
  // created() {
  //   if (!this.$route.params) {
  //     alert('nothing')
  //   } else {
  //     alert('ok')
  //     alert(JSON.stringify(this.$route.params))
  //     this.regis_select() //เรียกข้อมูลมาโชว์หน้า regis
  //     this.call_index() //เรียกข้อมูลมาโชว์หน้า adl frax score จาก index ไปเรียกต่อ
  //   }
  // },
  methods: {
    // idcard and hn
    async fecth_search_cid() {
      await axios
        .get(`${this.$axios.defaults.baseURL}Regis/search_cid_hn.php`)
        .then((response) => {
          this.cid_searchs = response.data
          // this.cid_searchs.forEach((id) => {
          //   this.hn_lists = id.hn
          //   this.cid_lists = id.cid
          // })
          this.hn_lists = this.cid_searchs
          this.cid_lists = this.cid_searchs
        })
    },
    //cmus
    async fetch_cmu() {
      await axios
        .get(`${this.$axios.defaults.baseURL}Regis/cmus.php`)
        .then((response) => {
          this.cmus = response.data
        })
    },
    //refer form cmu
    async fetch_refer_cmu() {
      await axios
        .get(`${this.$axios.defaults.baseURL}Regis/refer_cmu.php`)
        .then((response) => {
          this.refer_cmu_details = response.data
        })
    },
    //refer form pcu
    async fetch_refer_pcu() {
      await axios
        .get(`${this.$axios.defaults.baseURL}Regis/refer_pcu.php`)
        .then((response) => {
          this.refer_pcu_details = response.data
        })
    },

    // ดึงตำบล default
    async fecth_tmb_code() {
      await axios
        .get(`${this.$axios.defaults.baseURL}Regis/l_tmb_code.php`)
        .then((response) => {
          this.tmb_codes = response.data
          this.epidem_tmb_codes = response.data
        })
    },

    // ดึงอำเภอ default
    async fecth_amp_code() {
      await axios
        .get(`${this.$axios.defaults.baseURL}Regis/l_amp_code.php`)
        .then((response) => {
          this.amp_codes = response.data
          this.epidem_amp_codes = response.data
        })
    },

    // ดึงจังหวัด default
    async fecth_chw_code() {
      await axios
        .get(`${this.$axios.defaults.baseURL}Regis/l_chw_code.php`)
        .then((response) => {
          this.chw_codes = response.data
        })
    },
    //เปลี่ยน จังหวัด
    chwChange: function (e) {
      this.fecth_amp_code_sort(e)
      this.fecth_tmp_code_sort(e)
    },

    //เปลี่ยน อำเภอ
    ampChange: function (e) {
      this.fecth_tmp_code_sort(e)
    },
    // ดึงอำเภอ ตามจังหวัด
    async fecth_amp_code_sort(codes) {
      await axios
        .post(`${this.$axios.defaults.baseURL}Regis/l_amp_code_click.php`, {
          codes: codes,
        })
        .then((response) => {
          this.amp_codes = response.data
        })
    },

    // ดึงตำบล ตามอำเภอ
    async fecth_tmp_code_sort(amps) {
      await axios
        .post(`${this.$axios.defaults.baseURL}Regis/l_tmb_code_click.php`, {
          amps: amps,
        })
        .then((response) => {
          this.tmb_codes = response.data
        })
    },
    check_cmu(e) {
      if (e == true) {
        this.refer_cmu_detail_show = false
      } else {
        this.refer_cmu_detail_show = true
        this.refer_cmu_detail = ''
      }
    },
    check_pcu(e) {
      if (e == true) {
        this.refer_pcu_detail_show = false
      } else {
        this.refer_pcu_detail_show = true
        this.refer_pcu_detail = ''
      }
    },
    check_disease(e) {
      if (e == 'y') {
        this.disease_show = false
      } else {
        this.disease_show = true
        this.disease_detail = ''
      }
    },
    check_drug(e) {
      if (e == 'y') {
        this.drug_show = false
      } else {
        this.drug_show = true
        this.drug_detail = ''
      }
    },
    //บันทึก
    save_regis() {
      if (this.regis_selects) {
        this.regis_update()
      } else {
        if (
          !this.cmu &&
          !this.assessor_date &&
          !this.cid &&
          !this.hn &&
          !this.this.cmu &&
          !this.this.assessor
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

          if (this.name == '') {
            this.name = '-'
          }
          if (this.surname == '') {
            this.surname = '-'
          }
          if (this.birthday == '') {
            this.birthday = '-'
          }
          if (this.age == '') {
            this.age = '-'
          }
          if (this.tel == '') {
            this.tel = '-'
          }
          if (this.address == '') {
            this.address = '-'
          }
          if (this.moo == '') {
            this.moo = '-'
          }
          if (this.chw_code == '') {
            this.chw_code = '-'
          }
          if (this.amp_code == '') {
            this.amp_code = '-'
          }
          if (this.tmb_code == '') {
            this.tmb_code = '-'
          }
          if (this.refer_pcu == '') {
            this.refer_pcu = false
          }
          if (this.refer_pcu_detail == '') {
            this.refer_pcu_detail = '-'
          }
          if (this.refer_cmu == '') {
            this.refer_cmu = false
          }
          if (this.refer_cmu_detail == '') {
            this.refer_cmu_detail = '-'
          }
          if (this.walkin == '') {
            this.walkin = false
          }
          if (this.dementia == '') {
            this.dementia = false
          }
          if (this.falling == '') {
            this.falling = false
          }
          if (this.disease == '') {
            this.disease = 'n'
          }
          if (this.disease_detail == '') {
            this.disease_detail = '-'
          }
          if (this.drug == '') {
            this.drug = 'n'
          }

          if (this.drug_detail == '') {
            this.drug_detail = '-'
          }

          axios
            .post(`${this.$axios.defaults.baseURL}Regis/regis_add.php`, {
              uhid: this.uhid,
              cmu: this.cmu,
              assessor: this.assessor,
              assessor_date: this.assessor_date,
              cid: this.cid,
              hn: this.hn,
              name: this.name,
              surname: this.surname,
              birthday: this.birthday,
              age: this.age,
              tel: this.tel,
              address: this.address,
              moo: this.moo,
              chw_code: this.chw_code,
              amp_code: this.amp_code,
              tmb_code: this.tmb_code,
              refer_pcu: this.refer_pcu,
              refer_pcu_detail: this.refer_pcu_detail,
              refer_cmu: this.refer_cmu,
              refer_cmu_detail: this.refer_cmu_detail,
              walkin: this.walkin,
              dementia: this.dementia,
              falling: this.falling,
              disease: this.disease,
              disease_detail: this.disease_detail,
              drug: this.drug,
              drug_detail: this.drug_detail,
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
                // this.clear_form()
                this.save_search() //save แล้วแสดงรายชื่อ และเอา cid หรือ hn ไปใช้ต่อเลย
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
    refresh() {
      // this.$router.go()

      this.$emit('regisclearindex', 'clear')
      this.clear_form()
      //this.clear_txt_dialog()
    },
    clear_form() {
      this.$emit('regisclearindex', 'clear')
      this.cmu = ''
      this.assessor = ''
      this.assessor_date = format(
        parseISO(new Date().toISOString()),
        'yyyy-MM-dd'
      )
      // this.assessor_date = ''
      this.cid = '0'
      this.hn = ''
      this.name = ''
      this.surname = ''
      this.birthday = ''
      this.age = ''
      this.tel = ''
      this.address = ''
      this.moo = ''
      this.chw_code = ''
      this.amp_code = ''
      this.tmb_code = ''
      this.refer_pcu = ''
      this.refer_pcu_detail = ''
      this.refer_cmu = ''
      this.refer_cmu_detail = ''
      this.walkin = ''
      this.dementia = ''
      this.falling = ''
      this.disease = ''
      this.disease_detail = ''
      this.drug = ''
      this.drug_detail = ''
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
    search() {
      this.regis_select() //เรียกข้อมูลมาโชว์หน้า regis
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
    regis_select() {
      // alert(this.cid_show)
      // alert(this.hn_show)
      // alert(this.assessor_date)
      axios
        .post(`${this.$axios.defaults.baseURL}Regis/regis_select.php`, {
          cid: this.cid_show,
          hn: this.hn_show,
          assessor_date: this.assessor_date_show,
        })
        .then((response) => {
          this.regis_selects = response.data
          this.uhid = this.regis_selects[0].uhid
          this.cmu = this.regis_selects[0].cmu

          this.assessor = this.regis_selects[0].assessor
          this.assessor_date = this.regis_selects[0].assessor_date
          this.cid = this.regis_selects[0].cid
          this.hn = this.regis_selects[0].hn

          if (this.regis_selects[0].name == '-') {
            this.regis_selects[0].name = ''
          }
          if (this.regis_selects[0].surname == '-') {
            this.regis_selects[0].surname = ''
          }
          if (this.regis_selects[0].birthday == '-') {
            this.regis_selects[0].birthday = ''
          }
          if (this.regis_selects[0].age == '-') {
            this.regis_selects[0].age = ''
          }
          if (this.regis_selects[0].tel == '-') {
            this.regis_selects[0].tel = ''
          }
          if (this.regis_selects[0].address == '-') {
            this.regis_selects[0].address = ''
          }
          if (this.regis_selects[0].moo == '-') {
            this.regis_selects[0].moo = ''
          }
          if (this.regis_selects[0].chw_code == '-') {
            this.regis_selects[0].chw_code = ''
          }
          if (this.regis_selects[0].amp_code == '-') {
            this.regis_selects[0].amp_code = ''
          }
          if (this.regis_selects[0].tmb_code == '-') {
            this.regis_selects[0].tmb_code = ''
          }
          if (this.regis_selects[0].refer_pcu == false) {
            this.regis_selects[0].refer_pcu = ''
          }
          if (this.regis_selects[0].refer_pcu_detail == '-') {
            this.regis_selects[0].refer_pcu_detail = ''
          }

          if (this.regis_selects[0].refer_cmu == false) {
            this.regis_selects[0].refer_cmu = ''
          }
          if (this.regis_selects[0].refer_cmu_detail == '-') {
            this.regis_selects[0].refer_cmu_detail = ''
          }
          if (this.regis_selects[0].walkin == false) {
            this.regis_selects[0].walkin = ''
          }
          if (this.regis_selects[0].dementia == false) {
            this.regis_selects[0].dementia = ''
          }
          if (this.regis_selects[0].falling == false) {
            this.regis_selects[0].falling = ''
          }
          if (this.regis_selects[0].disease == 'n') {
            this.regis_selects[0].disease = ''
          }
          if (this.regis_selects[0].disease_detail == '-') {
            this.regis_selects[0].disease_detail = ''
          }
          if (this.regis_selects[0].drug == 'n') {
            this.regis_selects[0].drug = ''
          }
          if (this.regis_selects[0].drug_detail == '-') {
            this.regis_selects[0].drug_detail = ''
          }

          this.name = this.regis_selects[0].name
          this.surname = this.regis_selects[0].surname
          this.birthday = this.regis_selects[0].birthday
          this.age = this.regis_selects[0].age
          this.tel = this.regis_selects[0].tel
          this.address = this.regis_selects[0].address
          this.moo = this.regis_selects[0].moo
          this.chw_code = this.regis_selects[0].chw_code
          this.amp_code = this.regis_selects[0].amp_code
          this.tmb_code = this.regis_selects[0].tmb_code
          this.refer_pcu = this.regis_selects[0].refer_pcu
          this.refer_pcu_detail = this.regis_selects[0].refer_pcu_detail
          this.walkin = this.regis_selects[0].walkin
          this.dementia = this.regis_selects[0].dementia
          this.falling = this.regis_selects[0].falling
          this.disease = this.regis_selects[0].disease
          this.disease_detail = this.regis_selects[0].disease_detail
          this.drug = this.regis_selects[0].drug
          this.drug_detail = this.regis_selects[0].drug_detail
        })
    },
    regis_update: function () {
      if (!this.uhid) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ไม่พบข้อมูล',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        axios
          .put(`${this.$axios.defaults.baseURL}Regis/regis_update.php`, {
            uhid: this.uhid,
            cmu: this.cmu,
            assessor: this.assessor,
            assessor_date: this.assessor_date,
            cid: this.cid,
            hn: this.hn,
            name: this.name,
            surname: this.surname,
            birthday: this.birthday,
            age: this.age,
            tel: this.tel,
            address: this.address,
            moo: this.moo,
            chw_code: this.chw_code,
            amp_code: this.amp_code,
            tmb_code: this.tmb_code,
            refer_pcu: this.refer_pcu,
            refer_pcu_detail: this.refer_pcu_detail,
            refer_cmu: this.refer_cmu,
            refer_cmu_detail: this.refer_cmu_detail,
            walkin: this.walkin,
            dementia: this.dementia,
            falling: this.falling,
            disease: this.disease,
            disease_detail: this.disease_detail,
            drug: this.drug,
            drug_detail: this.drug_detail,
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
    async cid_search() {
      // alert(this.cid_list)
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
        })
    },
    async save_search() {
      // this.search(this.hn_list)
      //ใช้ hn และ cid จากหน้าบันทึกมาใช้เลย

      await axios
        .post(`${this.$axios.defaults.baseURL}Regis/search_name.php`, {
          search: 'cid',
          data_search: this.cid,
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

          this.$emit('sendcid', this.name_age_show) //่ส่งค่าไป index
        })
    },
  },
}
</script>

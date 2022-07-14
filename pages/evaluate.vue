<template>
  <!-- <v-row>
    <v-col class="text-center"> ประเมินผล </v-col>
  </v-row> -->
  <v-container>
    <v-row>
      <v-card-text>
        <v-toolbar class="text-h5 white--text" color="#B689C0">
          <fa
            :icon="['fas', 'fa-square-poll-horizontal']"
            class="text-h4 mr-2"
          />
          สรุปผลการประเมิน{{dialogs}}
        </v-toolbar>
      </v-card-text>
       <v-card-text v-if="person_show">
            <v-alert outlined color="purple">
              <div class="text-h6">ข้อมูลผู้สูงอายุ</div>

              <div class="text-h6 text--primary">
                 <div class="d-flex flex-row">
                  HN :
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.hn_show }}
                  </div>
                  เลขบัตรประชาชน :
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.cid_show }}
                  </div>
                
                </div></br>
                <div class="d-flex flex-row">
                  
                  ชื่อ-นามสกุล :
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.name_show }}
                  </div>
                  อายุ:
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.age_show }}
                  </div>
                  ปี ศูนย์บริการ :
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.name_cmu_show }}
                  </div>
                  ผู้ประเมิน:
                  <div class="text-h6 purple--text ml-2 mr-2">
                    {{ this.assessor_show }}
                  </div>
                </div>
              </div>
            </v-alert>
          </v-card-text>
    </v-row>
    <v-card-title>
      <v-spacer></v-spacer>
      <v-btn class="mx-2" fab dark color="#3EC70B" @click="dialogs = true">
        <v-icon dark> mdi-card-search </v-icon>
      </v-btn>
    </v-card-title>
    <v-row>
      <v-col cols="12">
        <e_adl  ref="callresult" @regisclearindex="clear_index_person" ></e_adl>
        <v-card>
          <v-subheader class="text-h6">
            <fa :icon="['fas', 'user-doctor']" class="text-h5 mr-2" />
            ข้อมูลทั่วไป
          </v-subheader>

          <v-list two-line>
            <template v-for="n in regis">
              <v-list-item :key="n">
                <v-list-item-avatar color="pink accent-1"> </v-list-item-avatar>

                <v-list-item-content>
                  <v-list-item-title>หัวข้อ - {{ n }}</v-list-item-title>

                  <v-list-item-subtitle>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nihil repellendus distinctio similique
                  </v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <v-divider v-if="n !== 6" :key="`divider-${n}`" inset></v-divider>
            </template>
          </v-list>
        </v-card>
        <v-card>
          <v-subheader class="text-h6">
            <fa :icon="['fas', 'brain']" class="text-h5 mr-2" />
            Dementia
          </v-subheader>

          <v-list two-line>
            <template v-for="n in dementia">
              <v-list-item :key="n">
                <v-list-item-avatar color="pink accent-1"> </v-list-item-avatar>

                <v-list-item-content>
                  <v-list-item-title>หัวข้อ - {{ n }}</v-list-item-title>

                  <v-list-item-subtitle>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nihil repellendus distinctio similique
                  </v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <v-divider v-if="n !== 6" :key="`divider-${n}`" inset></v-divider>
            </template>
          </v-list>
        </v-card>
        <v-card>
          <v-subheader class="text-h6">
            <fa :icon="['fas', 'person-falling']" class="text-h5 mr-2" />
            Falling
          </v-subheader>

          <v-list two-line>
            <template v-for="n in falling">
              <v-list-item :key="n">
                <v-list-item-avatar color="pink accent-1"> </v-list-item-avatar>

                <v-list-item-content>
                  <v-list-item-title>หัวข้อ - {{ n }}</v-list-item-title>

                  <v-list-item-subtitle>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nihil repellendus distinctio similique
                  </v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <v-divider v-if="n !== 6" :key="`divider-${n}`" inset></v-divider>
            </template>
          </v-list>
        </v-card>
         <v-dialog v-model="dialogs" width="600">
        <v-card >
          <v-card-title class="text-h5 white--text deep-purple darken-1">
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
                >
                  <!-- @change="hn_search()" -->
                </v-autocomplete
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
                >
                   <!-- @change="cid_search()" -->
                </v-autocomplete></v-col
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
  </v-container>
</template>

<script>
import axios from 'axios'
import e_adl from '~/components/evaluate/e-index.vue'
export default {
  name: 'Evaluate',
  data() {
    return {
      dialogs: false,
      regis: ['ADL', 'FRAX-SCORE'],
      dementia: ['Mini-Cog', 'TGDS-15', 'TMSE', 'MOCA'],
      falling: [
        'ประวัติการหกล้ม',
        'Short-Fbs-I',
        'TUGT',
        'Oxford Knee Score',
        'บ้านเสี่ยงหกล้ม',
        'SPPB',
      ],
      drawer: null,
      cid_searchs: '',
      hn_lists: '',
      cid_lists: '',
      hn_list: '',
      cid_list: '',
      person_show: true,
      name_age_show: '',
      name_show: '',
      age_show: '',
      name_cmu_show: '',
      assessor_show: '',
      cid_show: '',
      hn_show: '',
      // name_age_show_dialog: '',
      // name_show_dialog: '',
      // age_show_dialog: '',
      // name_cmu_show_dialog: '',
      // assessor_show_dialog: '',
      // cid_show_dialog: '',
      // hn_show_dialog: '',
      // assessor_date_show_dialog: '',
    }
  },
  components: {
    e_adl,
  },
  mounted() {
    //ดึง list cid and hn
    this.fecth_search_cid()
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
    async cid_search() {
      // this.search(this.cid_list)
      if (!this.cid_list) {
      } else {
        await axios
          .post(`${this.$axios.defaults.baseURL}Regis/search_name.php`, {
            search: 'cid',
            data_search: this.cid_list,
          })
          .then((response) => {
            // this.name_age_show_dialog = response.data
            // this.name_show_dialog = this.name_age_show_dialog[0].fullname
            // this.age_show_dialog = this.name_age_show_dialog[0].age
            // this.name_cmu_show_dialog = this.name_age_show_dialog[0].name
            // this.assessor_show_dialog = this.name_age_show_dialog[0].assessor
            // this.cid_show_dialog = this.name_age_show_dialog[0].cid
            // this.hn_show_dialog = this.name_age_show_dialog[0].hn
            // this.assessor_date_show_dialog =
            //   this.name_age_show_dialog[0].assessor_date
            //this.clear_form()
            if (response.data) {
              this.name_age_show = response.data
              this.name_show = this.name_age_show[0].fullname
              this.age_show = this.name_age_show[0].age
              this.name_cmu_show = this.name_age_show[0].name
              this.assessor_show = this.name_age_show[0].assessor
              this.cid_show = this.name_age_show[0].cid
              this.hn_show = this.name_age_show[0].hn
              this.assessor_date_show = this.name_age_show[0].assessor_date
            }
            //this.$refs.callresult.resultdata(response.data)
            //this.dialogs = false
            // this.$refs.callresult.fraxscoreresultdata(this.name_age_show)
          })
      }
    },
    async hn_search() {
      if (!this.hn_list) {
      } else {
        await axios
          .post(`${this.$axios.defaults.baseURL}Regis/search_name.php`, {
            search: 'hn',
            data_search: this.hn_list,
          })
          .then((response) => {
            // this.name_age_show_dialog = response.data
            // this.name_show_dialog = this.name_age_show_dialog[0].fullname
            // this.age_show_dialog = this.name_age_show_dialog[0].age
            // this.name_cmu_show_dialog = this.name_age_show_dialog[0].name
            // this.assessor_show_dialog = this.name_age_show_dialog[0].assessor
            // this.cid_show_dialog = this.name_age_show_dialog[0].cid
            // this.hn_show_dialog = this.name_age_show_dialog[0].hn
            // this.assessor_date_show_dialog =
            //   this.name_age_show_dialog[0].assessor_date
            //this.clear_form()
            this.name_age_show = response.data
            this.name_show = this.name_age_show[0].fullname
            this.age_show = this.name_age_show[0].age
            this.name_cmu_show = this.name_age_show[0].name
            this.assessor_show = this.name_age_show[0].assessor
            this.cid_show = this.name_age_show[0].cid
            this.hn_show = this.name_age_show[0].hn
            this.assessor_date_show = this.name_age_show[0].assessor_date

            //this.$refs.callresult.resultdata(response.data)
            //this.dialogs = false
            //this.$refs.callresult.fraxscoreresultdata(this.name_age_show)
          })
      }
    },
    clear_form() {
      this.name_age_show = ''
      this.name_show = ''
      this.age_show = ''
      this.name_cmu_show = ''
      this.assessor_show = ''
      this.cid_show = ''
      this.hn_show = ''
      this.assessor_date_show = ''
    },
    // clear_dialog_form() {
    //   // this.cid_list = ''
    //   // this.hn_list = ''

    //   this.name_age_show_dialog = ''
    //   this.name_show_dialog = ''
    //   this.age_show_dialog = ''
    //   this.name_cmu_show_dialog = ''
    //   this.assessor_show_dialog = ''
    //   this.cid_show_dialog = ''
    //   this.hn_show_dialog = ''
    //   this.assessor_date_show_dialog = ''
    // },
    search() {
      // if (this.hn_list) {
      //   this.hn_search()
      //   this.$refs.callresult.resultdata(this.name_age_show)
      // } else if (this.cid_list) {
      //   cid_search()
      //   this.$refs.callresult.resultdata(this.name_age_show)
      // }
      //this.dialog = false
      //this.clear_dialog_form()
      //} else {

      //this.dialog = false
      //this.clear_dialog_form()
      this.$refs.callresult.resultdata(this.name_age_show)
      this.dialogs = false
    },
    searchdata() {
      // alert('search')
      // this.dialogs = true
      // this.$refs.callresult.clear_form()
    },
    clear_index_person() {
      // this.dialog = false
      // alert('emit')
      // this.dialog = false
      // alert('emit2')
    },
  },
}
</script>

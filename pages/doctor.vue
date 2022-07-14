<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-toolbar class="text-h5 white--text" color="#B689C0">
            <fa :icon="['fas', 'user-doctor']" class="text-h4 mr-2" />
            แพทย์
          </v-toolbar>
        </v-card-text>
        <v-card-text>
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
        <v-card-title>
          <v-spacer></v-spacer>
          <!-- <v-btn class="mx-2" fab dark color="#243A73" @click="refresh">
            <v-icon dark> mdi-refresh </v-icon>
          </v-btn> -->
          <v-btn class="mx-2" fab dark color="#3EC70B" @click="dialog = true">
            <v-icon dark> mdi-card-search </v-icon>
          </v-btn>
        </v-card-title>
        
          <v-row>
            <v-col cols="12" md="4">
              <v-hover v-slot="{ hover }" open-delay="100" class="hands">
                <!-- <nuxt-link
                  class="boxhead"
                  :to="{ name: 'index', params: { index: index } }"
                > -->
                  <v-card
                    @click="indexclick"
                    :elevation="hover ? 16 : 2"
                    :class="{ 'on-hover': hover }"
                    class="mx-auto"
                    height="350"
                    max-width="100%"
                    color="#947EC3"
                  >
                    <v-card-text
                      class="
                        font-weight-medium
                        mt-12
                        text-center text-subtitle-1
                      "
                    >
                      <fa
                        :icon="['fas', 'person-walking-with-cane']"
                        class="text-h2 mr-2 fontcolor"
                        size="100"
                      />
                      <div class="text-h2 fontcolor">ข้อมูลทั่วไป</div>
                    </v-card-text>
                  </v-card>
                <!-- </nuxt-link> -->
              </v-hover>
            </v-col>
            <v-col cols="12" md="4">
              <v-hover v-slot="{ hover }" open-delay="100" class="hands">
                <!-- <nuxt-link
                  class="boxhead"
                  :to="{
                    name: 'dementia',
                    params: { dementia: dementia },
                  }"
                > -->
                  <v-card
                         @click="dementiaclick"
                    :elevation="hover ? 16 : 2"
                    :class="{ 'on-hover': hover }"
                    class="mx-auto"
                    height="350"
                    max-width="100%"
                    color="#E78EA9"
                  >
                    <v-card-text
                      class="
                        font-weight-medium
                        mt-12
                        text-center text-subtitle-1
                      "
                    >
                      <fa
                        :icon="['fas', 'brain']"
                        class="text-h2 mr-2 fontcolor"
                        size="100"
                      />
                      <div class="text-h2 fontcolor">Dementia</div>
                    </v-card-text>
                  </v-card>
                <!-- </nuxt-link> -->
              </v-hover>
            </v-col>
            <v-col cols="12" md="4">
              <v-hover v-slot="{ hover }" open-delay="100" class="hands">
                <!-- <nuxt-link
                  class="boxhead"
                  :to="{ name: 'falling', params: { falling: falling } }"
                > -->
                  <v-card
                       @click="fallingclick"
                    :elevation="hover ? 16 : 2"
                    :class="{ 'on-hover': hover }"
                    class="mx-auto"
                    height="350"
                    max-width="100%"
                    color="#92BA92"
                  >
                    <v-card-text
                      class="
                        font-weight-medium
                        mt-12
                        text-center text-subtitle-1
                      "
                    >
                      <fa
                        :icon="['fas', 'person-falling']"
                        class="text-h2 mr-2 fontcolor"
                        size="100"
                      />
                      <div class="text-h2 fontcolor">Falling</div>
                    </v-card-text>
                  </v-card>
                <!-- </nuxt-link> -->
              </v-hover>
            </v-col>
          </v-row>
        </v-card-text>
      </v-card>
       <v-dialog v-model="dialog" width="600">
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
  name: 'doctor',
  data() {
    return {
      index: `index`,
      dementia: 'dementia',
      falling: 'falling',
      dialog: false,
      cid_searchs: '',
      hn_list: '',
      hn_lists: '',
      cid_list: '',
      cid_lists: '',
      person_show: true,
      name_age_show: '',
      name_show: '',
      age_show: '',
      name_cmu_show: '',
      assessor_show: '',
      cid_show: '',
      hn_show: '',
      assessor_date_show: '',
      data_doctor_search: '',
    }
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
      // alert(this.cid_list)
      // this.search(this.cid_list)
      if (!this.cid_list) {
      } else {
        await axios
          .post(`${this.$axios.defaults.baseURL}Regis/search_name.php`, {
            search: 'cid',
            data_search: this.cid_list,
          })
          .then((response) => {
            this.clear_form()
            this.name_age_show = response.data
            this.name_show = this.name_age_show[0].fullname
            this.age_show = this.name_age_show[0].age
            this.name_cmu_show = this.name_age_show[0].name
            this.assessor_show = this.name_age_show[0].assessor
            this.cid_show = this.name_age_show[0].cid
            this.hn_show = this.name_age_show[0].hn
            this.assessor_date_show = this.name_age_show[0].assessor_date
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
            this.clear_form()
            this.name_age_show = response.data
            this.name_show = this.name_age_show[0].fullname
            this.age_show = this.name_age_show[0].age
            this.name_cmu_show = this.name_age_show[0].name
            this.assessor_show = this.name_age_show[0].assessor
            this.cid_show = this.name_age_show[0].cid
            this.hn_show = this.name_age_show[0].hn
            this.assessor_date_show = this.name_age_show[0].assessor_date
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
    search() {
      if (!this.hn_list) {
        this.dialog = false
      } else {
        this.dialog = false
      }
    },
    indexclick() {
      if (!this.name_age_show) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ท่านยังไม่ได้เลือกผู้สูงอายุ',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        // this.$router.push({
        //   name: 'index',
        //   params: { index: this.name_age_show },
        // })

        const datasend = {
          fullname: window.btoa(this.name_age_show[0].fullname),
          age: window.btoa(this.name_age_show[0].age),
          // name: window.btoa(this.name_age_show[0].name),
          assessor: window.btoa(this.name_age_show[0].assessor),
          cid: window.btoa(this.name_age_show[0].cid),
          hn: window.btoa(this.name_age_show[0].hn),
          assessor_date: window.btoa(this.name_age_show[0].assessor_date),
        }
        let routeData = this.$router.resolve({
          name: 'index',
          query: datasend,
        })
        window.open(routeData.href, '_blank')
      }
    },
    dementiaclick() {
      if (!this.name_age_show) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ท่านยังไม่ได้เลือกผู้สูงอายุ',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        // this.$router.push({
        //   name: 'dementia',
        //   params: { index: this.name_age_show },
        // })

        const datasend = {
          fullname: window.btoa(this.name_age_show[0].fullname),
          age: window.btoa(this.name_age_show[0].age),
          // name: window.btoa(this.name_age_show[0].name),
          assessor: window.btoa(this.name_age_show[0].assessor),
          cid: window.btoa(this.name_age_show[0].cid),
          hn: window.btoa(this.name_age_show[0].hn),
          assessor_date: window.btoa(this.name_age_show[0].assessor_date),
        }
        let routeData = this.$router.resolve({
          name: 'dementia',
          query: datasend,
        })
        window.open(routeData.href, '_blank')
      }
    },
    fallingclick() {
      if (!this.name_age_show) {
        this.$swal({
          title: 'แจ้งเตือน',
          text: 'ท่านยังไม่ได้เลือกผู้สูงอายุ',
          icon: 'error',
          confirmButtonText: 'ตกลง',
        })
      } else {
        // this.$router.push({
        //   name: 'falling',
        //   params: { index: this.name_age_show },
        // })

        const datasend = {
          fullname: window.btoa(this.name_age_show[0].fullname),
          age: window.btoa(this.name_age_show[0].age),
          // name: window.btoa(this.name_age_show[0].name),
          assessor: window.btoa(this.name_age_show[0].assessor),
          cid: window.btoa(this.name_age_show[0].cid),
          hn: window.btoa(this.name_age_show[0].hn),
          assessor_date: window.btoa(this.name_age_show[0].assessor_date),
        }
        let routeData = this.$router.resolve({
          name: 'falling',
          query: datasend,
        })
        window.open(routeData.href, '_blank')
      }
    },
  },
}
</script>
<style>
.hands {
  cursor: pointer;
}
.boxhead {
  text-decoration: none;
}
.fontcolor {
  color: #534340;
}
</style>

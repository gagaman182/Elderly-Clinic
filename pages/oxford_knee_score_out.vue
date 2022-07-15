<template>
  <v-container>
    <v-row>
      <v-card-text>
        <v-toolbar class="text-h5 white--text" color="#B689C0">
          <fa
            :icon="['fas', 'fa-square-poll-horizontal']"
            class="text-h4 mr-2"
          />
          แบบประเมินระดับความรุนแรงของโรคข้อเข่าเสื่อม ( Oxford Knee Score )
          ที่ต้องส่งกลับพยาบาล
        </v-toolbar>
      </v-card-text>
      <v-card-text>
        <v-spacer></v-spacer>
        <v-btn color="#2EB086" class="button_head" x-large dark>
          <v-icon>mdi-microsoft-excel </v-icon>
          <export-excel
            :data="knee_score_all_num"
            name="ข้อมูลส่งต่อ  Oxford Knee Score.xls"
            :fields="columns_excel"
            >EXCEL
          </export-excel>
          <!-- :fields="columns_excel" -->
        </v-btn>
      </v-card-text>
      <v-card-text>
        <v-text-field
          v-model="search"
          append-icon="mdi-magnify"
          label="ค้นหา"
          single-line
          hide-details
        ></v-text-field
      ></v-card-text>
      <v-card-text>
        <v-data-table
          id="virtual-scroll-table"
          :headers="headers"
          :items="knee_score_all_num"
          :items-per-page="10"
          class="elevation-1"
          :search="search"
          :footer-props="{
            showFirstLastPage: true,
            firstIcon: 'mdi-arrow-collapse-left',
            lastIcon: 'mdi-arrow-collapse-right',
            prevIcon: 'mdi-minus',
            nextIcon: 'mdi-plus',
            'items-per-page-text': 'จำนวน/หน้า',
          }"
        >
          <template v-slot:no-data>
            <v-alert :value="true" color="#947EC3" class="white--text">
              ไม่มีข้อมูล
            </v-alert>
          </template>
          <template v-slot:item.outto="{ item }">
            <v-chip :color="getColor(item.outto)" dark>
              {{ item.outto }}
            </v-chip>
          </template>
          <template v-slot:item.result="{ item }">
            <v-chip :color="getlevel(item.result)" dark>
              {{ item.result }}
            </v-chip>
          </template>
        </v-data-table>
      </v-card-text>
    </v-row>
  </v-container>
</template>

<script>
import axios from 'axios'
export default {
  name: 'knee_score_out',
  data() {
    return {
      search: '',
      headers: [
        { text: '#', value: 'index' },
        {
          text: 'ศูนย์บริการ',
          align: 'start',
          sortable: false,
          value: 'cmu',
          width: '15%',
        },
        {
          text: 'HN',
          sortable: false,
          value: 'hn',
        },
        { text: 'เลขบัตร ปชช.', value: 'cid', sortable: false },
        {
          text: 'ชื่อ-นามสกุล',
          value: 'fullname',
          sortable: false,
          width: '15%',
        },
        { text: 'อายุ', value: 'age', sortable: false },
        { text: 'คะแนนรวม', value: 'total', sortable: false },
        { text: 'ประเมินผล', value: 'result', sortable: false },
        { text: 'ส่งต่อ', value: 'outto', sortable: false },
      ],
      knee_score_all: [],
      columns_excel: {
        ลำดับ: 'index',
        HN: 'hn',
        เลขบัตรปชช: 'cid',
        ชื่อนามสกุล: 'fullname',
        อายุ: 'age',
        คะแนนรวม: 'total',
        ประเมินผล: 'result',
        ส่งต่อ: 'outto',
      },
    }
  },
  mounted() {
    this.fecth_knee_score()
  },
  methods: {
    async fecth_knee_score() {
      if (!this.knee_score_all) {
      } else {
        await axios
          .get(`${this.$axios.defaults.baseURL}Outto/knee_score_outto.php`)
          .then((response) => {
            this.knee_score_all = response.data
          })
      }
    },
    getColor(outto) {
      if (outto == 'พบแพทย์') return 'blue'
      else return 'green'
    },

    getlevel(level) {
      if (level == 'ระดับรุนแรง') return 'red'
      else if (level == 'ระดับปานนกลาง') return 'orange'
      else if (level == 'ระดับเริ่มมีอาการ') return 'yellow darken-1'
      else if (level == 'ไม่พบอาการผิดปกติ') return 'green'
    },
  },
  computed: {
    knee_score_all_num() {
      return this.knee_score_all.map((items, index) => ({
        ...items,
        index: index + 1,
      }))
    },
  },
}
</script>
<style>
#virtual-scroll-table {
  max-width: 1200px;
  overflow: auto;
}
</style>


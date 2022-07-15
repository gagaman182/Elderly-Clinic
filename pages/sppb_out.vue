<template>
  <v-container>
    <v-row>
      <v-card-text>
        <v-toolbar class="text-h5 white--text" color="#B689C0">
          <fa
            :icon="['fas', 'fa-square-poll-horizontal']"
            class="text-h4 mr-2"
          />
          การประเมิน Short physical performance battery (SPPB)
          ที่ต้องส่งกลับพยาบาล
        </v-toolbar>
      </v-card-text>
      <v-card-text>
        <v-spacer></v-spacer>
        <v-btn color="#2EB086" class="button_head" x-large dark>
          <v-icon>mdi-microsoft-excel </v-icon>
          <export-excel
            :data="sppb_all_num"
            name="ข้อมูลส่งต่อ SPPB.xls"
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
          :items="sppb_all_num"
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
  name: 'sppb_out',
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
        { text: 'Balance', value: 'sppb1', sortable: false },
        { text: 'Tandem stand', value: 'sppb2', sortable: false },
        { text: '4m gait speed', value: 'sppb3', sortable: false },
        { text: 'Chair stands', value: 'sppb4', sortable: false },
        { text: 'ประเมินผล', value: 'result', sortable: false },
        { text: 'ส่งต่อ', value: 'outto', sortable: false },
      ],
      sppb_all: [],
      columns_excel: {
        ลำดับ: 'index',
        HN: 'hn',
        เลขบัตรปชช: 'cid',
        ชื่อนามสกุล: 'fullname',
        อายุ: 'age',
        Balance: 'sppb1',
        Tandem_stand: 'sppb2',
        _4m_gait_speed: 'sppb3',
        Chair_stands: 'sppb4',
        ประเมินผล: 'result',
        ส่งต่อ: 'outto',
      },
    }
  },
  mounted() {
    this.fecth_sppb()
  },
  methods: {
    async fecth_sppb() {
      if (!this.sppb_all) {
      } else {
        await axios
          .get(`${this.$axios.defaults.baseURL}Outto/sppb_outto.php`)
          .then((response) => {
            this.sppb_all = response.data
          })
      }
    },
    getColor(outto) {
      if (outto == 'พบพยาบาล') return 'blue'
      else return 'green'
    },
    getlevel(level) {
      if (level == 'servere limitaiton') return 'red'
      else if (level == 'moderate limitaiton') return 'orange'
      else if (level == 'mild limitaiton') return 'yellow darken-1'
      else if (level == 'minimal limitaiton') return 'green'
    },
  },
  computed: {
    sppb_all_num() {
      return this.sppb_all.map((items, index) => ({
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


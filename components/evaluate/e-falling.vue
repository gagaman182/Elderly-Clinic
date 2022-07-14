<template>
  <v-row>
    <v-col cols="12">
      <v-card>
        <v-subheader class="text-h6">
          <fa :icon="['fas', 'person-falling']" class="text-h5 mr-2" />
          Falling
        </v-subheader>

        <v-list two-line>
          <template>
            <v-list-item>
              <v-list-item-avatar color="pink accent-1">
                <v-icon> mdi-folder-multiple-plus-outline </v-icon>
              </v-list-item-avatar>

              <v-list-item-content>
                <v-list-item-title>หัวข้อ - ประวัติการหกล้ม</v-list-item-title>

                <v-list-item-subtitle>
                  แปรผล
                  <v-chip
                    class="ma-2"
                    :color="fall_color_change"
                    text-color="white"
                  >
                    <v-avatar left>
                      <v-icon>mdi-checkbox-marked-circle</v-icon>
                    </v-avatar>
                    {{ fall_result }}
                  </v-chip>
                </v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>

            <v-divider inset></v-divider>
          </template>
        </v-list>
        <v-list two-line>
          <template>
            <v-list-item>
              <v-list-item-avatar color="pink accent-1">
                <v-icon> mdi-folder-multiple-plus-outline </v-icon>
              </v-list-item-avatar>

              <v-list-item-content>
                <v-list-item-title>หัวข้อ - Short_Fbs_I</v-list-item-title>

                <v-list-item-subtitle>
                  คะแนน
                  <v-chip
                    class="ma-2"
                    :color="short_fbs_i_color_change"
                    text-color="white"
                  >
                    <v-avatar left :class="short_fbs_i_color_switch_change">
                      {{ short_fbs_i_total }}
                    </v-avatar>
                  </v-chip>
                </v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>

            <v-divider inset></v-divider>
          </template>
        </v-list>
        <v-list two-line>
          <template>
            <v-list-item>
              <v-list-item-avatar color="pink accent-1">
                <v-icon> mdi-folder-multiple-plus-outline </v-icon>
              </v-list-item-avatar>

              <v-list-item-content>
                <v-list-item-title
                  >หัวข้อ - Timed Up and Go Test (TUGT)</v-list-item-title
                >

                <v-list-item-subtitle>
                  แปรผล
                  <v-chip
                    class="ma-2"
                    :color="tugt_color_change"
                    text-color="white"
                  >
                    <v-avatar left>
                      <v-icon>mdi-checkbox-marked-circle</v-icon>
                    </v-avatar>
                    {{ tugt_result }}
                  </v-chip>
                </v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>

            <v-divider inset></v-divider>
          </template>
        </v-list>
        <v-list two-line>
          <template>
            <v-list-item>
              <v-list-item-avatar color="pink accent-1">
                <v-icon> mdi-folder-multiple-plus-outline </v-icon>
              </v-list-item-avatar>

              <v-list-item-content>
                <v-list-item-title
                  >หัวข้อ - Oxford Knee Score</v-list-item-title
                >

                <v-list-item-subtitle>
                  คะแนน-แปรผล
                  <v-chip
                    class="ma-2"
                    :color="knee_score_color_change"
                    text-color="white"
                  >
                    <v-avatar left :class="knee_score_color_switch_change">
                      {{ knee_score_total }}
                    </v-avatar>
                    - {{ knee_score_result }}
                  </v-chip>
                </v-list-item-subtitle>
                <v-list-item-subtitle>
                  ส่งต่อผู้สูงอายุ
                  <v-chip
                    class="ma-2"
                    :color="knee_score_outto_color_change"
                    text-color="white"
                  >
                    <v-avatar left>
                      <v-icon>mdi-checkbox-marked-circle</v-icon>
                    </v-avatar>
                    {{ knee_score_outto }}
                  </v-chip>
                </v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </template>
        </v-list>
        <v-list two-line>
          <template>
            <v-list-item>
              <v-list-item-avatar color="pink accent-1">
                <v-icon> mdi-folder-multiple-plus-outline </v-icon>
              </v-list-item-avatar>

              <v-list-item-content>
                <v-list-item-title
                  >หัวข้อ - ประเมินบ้านเสี่ยงล้ม</v-list-item-title
                >

                <v-list-item-subtitle>
                  คะแนน-แปรผล
                  <v-chip
                    class="ma-2"
                    :color="risk_fall_color_change"
                    text-color="white"
                  >
                    <v-avatar left :class="risk_fall_color_switch_change">
                      {{ risk_fall_total }}
                    </v-avatar>
                    - {{ risk_fall_result }}
                  </v-chip>
                </v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </template>
        </v-list>
        <v-list two-line>
          <template>
            <v-list-item>
              <v-list-item-avatar color="pink accent-1">
                <v-icon> mdi-folder-multiple-plus-outline </v-icon>
              </v-list-item-avatar>

              <v-list-item-content>
                <v-list-item-title
                  >หัวข้อ - Short physical performance battery
                  (SPPB)</v-list-item-title
                >

                <v-list-item-subtitle>
                  คะแนน-แปรผล
                  <v-chip
                    class="ma-2"
                    :color="sppb_color_change"
                    text-color="white"
                  >
                    <v-avatar left :class="sppb_color_switch_change">
                      {{ sppb_total }}
                    </v-avatar>
                    - {{ sppb_result }}
                  </v-chip>
                </v-list-item-subtitle>
                <v-list-item-subtitle>
                  ส่งต่อผู้สูงอายุ
                  <v-chip
                    class="ma-2"
                    :color="sppb_outto_color_change"
                    text-color="white"
                  >
                    <v-avatar left>
                      <v-icon>mdi-checkbox-marked-circle</v-icon>
                    </v-avatar>
                    {{ sppb_outto }}
                  </v-chip>
                </v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </template>
        </v-list>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
import axios from 'axios'
export default {
  name: 'e-dementia',
  data() {
    return {
      fall_selects: '',
      fall_result: '',
      short_fbs_i_selects: '',
      short_fbs_i_total: '',
      tugt_selects: '',
      tugt_tug2: '',
      tugt_result: '',
      knee_score_selects: '',
      knee_score_total: '',
      knee_score_result: '',
      knee_score_outto: '',
      risk_fall_selects: '',
      risk_fall_total: '',
      risk_fall_result: '',
      sppb_selects: '',
      sppb_total: '',
      sppb_result: '',
      sppb_outto: '',
    }
  },
  computed: {
    fall_color_change: function () {
      if (this.fall_result == 'เคยหกล้ม') return 'red'
      else if (this.fall_result == 'ไม่เคยหกล้ม') return 'green'
    },
    short_fbs_i_color_change: function () {
      if (this.short_fbs_i_total) return 'blue'
      else if (this.short_fbs_i_total == 0) return 'gray'
    },
    short_fbs_i_color_switch_change: function () {
      if (this.short_fbs_i_total) return 'blue darken-4'
      else if (this.short_fbs_i_total == 0) return 'gray'
    },
    tugt_color_change: function () {
      if (this.tugt_tug2 > 12) return 'red'
      else if (this.tugt_tug2 >= 1 && this.tugt_tug2 <= 12) return 'green'
      else if (this.tugt_tug2 == 0) return 'gray'
    },
    knee_score_color_change: function () {
      if (this.knee_score_total >= 1 && this.knee_score_total <= 19)
        return 'red'
      else if (this.knee_score_total >= 20 && this.knee_score_total <= 29)
        return 'orange'
      else if (this.knee_score_total >= 30 && this.knee_score_total <= 39)
        return 'yellow darken-1'
      else if (this.knee_score_total >= 40 && this.knee_score_total <= 48)
        return 'green'
    },
    knee_score_color_switch_change: function () {
      if (this.knee_score_total >= 1 && this.knee_score_total <= 19)
        return 'red darken-4'
      else if (this.knee_score_total >= 20 && this.knee_score_total <= 29)
        return 'orange darken-4'
      else if (this.knee_score_total >= 30 && this.knee_score_total <= 39)
        return 'amber accent-4'
      else if (this.knee_score_total >= 40 && this.knee_score_total <= 48)
        return 'green darken-4'
    },
    knee_score_outto_color_change: function () {
      if (this.knee_score_total >= 1 && this.knee_score_total < 30)
        return 'blue'
      else if (this.knee_score_total >= 30 && this.knee_score_total <= 39)
        return 'green'
    },
    risk_fall_color_change: function () {
      if (this.risk_fall_total == 0) return 'gray'
      else if (this.risk_fall_total >= 1 && this.risk_fall_total <= 2)
        return 'green'
      else if (this.risk_fall_total >= 3 && this.risk_fall_total <= 4)
        return 'orange'
      else if (this.risk_fall_total >= 5) return 'red'
    },
    risk_fall_color_switch_change: function () {
      if (this.risk_fall_total == 0) return 'gray darken-4'
      else if (this.risk_fall_total >= 1 && this.risk_fall_total <= 2)
        return 'green darken-4'
      else if (this.risk_fall_total >= 3 && this.risk_fall_total <= 4)
        return 'amber accent-4'
      else if (this.risk_fall_total >= 5) return 'red darken-4'
    },
    sppb_color_change: function () {
      if (this.sppb_total >= 1 && this.sppb_total <= 3) return 'red'
      else if (this.sppb_total >= 4 && this.sppb_total <= 6) return 'orange'
      else if (this.sppb_total >= 7 && this.sppb_total <= 9)
        return 'yellow darken-1'
      else if (this.sppb_total >= 10 && this.sppb_total <= 12) return 'green'
      else if (this.sppb_total == 0) return 'gray'
    },
    sppb_color_switch_change: function () {
      if (this.sppb_total >= 1 && this.sppb_total <= 3) return 'red darken-4'
      else if (this.sppb_total >= 4 && this.sppb_total <= 6)
        return 'orange darken-4'
      else if (this.sppb_total >= 7 && this.sppb_total <= 9)
        return 'amber accent-4'
      else if (this.sppb_total >= 10 && this.sppb_total <= 12)
        return 'green darken-4'
      else if (this.sppb_total == 0) return 'gray'
    },
    sppb_outto_color_change: function () {
      if (this.sppb_total >= 1 && this.sppb_total <= 3) return 'green'
      else if (this.sppb_total >= 4 && this.sppb_total <= 12) return 'blue'
    },
  },

  mounted() {},
  methods: {
    async fallresultdata(value) {
      this.clear_form()
      await axios
        .post(`${this.$axios.defaults.baseURL}Evaluate/e_fall_result.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          // alert(JSON.stringify(response.data))
          this.fall_selects = response.data
          this.fall_result = this.fall_selects[0].fall
        })
    },
    async shortfbsiresultdata(value) {
      this.clear_form()
      await axios
        .post(
          `${this.$axios.defaults.baseURL}Evaluate/e_short_fbs_i_result.php`,
          {
            cid: value[0].cid,
            hn: value[0].hn,
            assessor_date: value[0].assessor_date,
          }
        )
        .then((response) => {
          //alert(JSON.stringify(response.data))
          this.short_fbs_i_selects = response.data
          this.short_fbs_i_total = this.short_fbs_i_selects[0].total
        })
    },
    async tugtresultdata(value) {
      this.clear_form()
      await axios
        .post(`${this.$axios.defaults.baseURL}Evaluate/e_tugt_result.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          //alert(JSON.stringify(response.data))
          this.tugt_selects = response.data
          this.tugt_tug2 = this.tugt_selects[0].tug2
          this.tugt_result = this.tugt_selects[0].result
        })
    },
    async kneescoreresultdata(value) {
      this.clear_form()
      await axios
        .post(
          `${this.$axios.defaults.baseURL}Evaluate/e_knee_score_result.php`,
          {
            cid: value[0].cid,
            hn: value[0].hn,
            assessor_date: value[0].assessor_date,
          }
        )
        .then((response) => {
          //alert(JSON.stringify(response.data))
          this.knee_score_selects = response.data
          this.knee_score_total = this.knee_score_selects[0].total
          this.knee_score_result = this.knee_score_selects[0].result
          this.knee_score_outto = this.knee_score_selects[0].outto
        })
    },
    async riskfallresultdata(value) {
      this.clear_form()
      await axios
        .post(
          `${this.$axios.defaults.baseURL}Evaluate/e_risk_fall_result.php`,
          {
            cid: value[0].cid,
            hn: value[0].hn,
            assessor_date: value[0].assessor_date,
          }
        )
        .then((response) => {
          //alert(JSON.stringify(response.data))
          this.risk_fall_selects = response.data
          this.risk_fall_total = this.risk_fall_selects[0].total
          this.risk_fall_result = this.risk_fall_selects[0].result
        })
    },
    async sppbresultdata(value) {
      this.clear_form()
      await axios
        .post(`${this.$axios.defaults.baseURL}Evaluate/e_sppb_result.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          //alert(JSON.stringify(response.data))
          this.sppb_selects = response.data
          this.sppb_total = this.sppb_selects[0].total
          this.sppb_result = this.sppb_selects[0].result
          this.sppb_outto = this.sppb_selects[0].outto
        })
    },

    clear_form() {
      this.fall_result = ''
      this.short_fbs_i_total = ''
      this.tugt_total = ''
      this.knee_score_total = ''
      this.knee_score_result = ''
      this.knee_score_outto = ''
      this.risk_fall_total = ''
      this.risk_fall_result = ''
      this.sppb_total = ''
      this.sppb_result = ''
      this.sppb_outto = ''
    },
  },
}
</script>

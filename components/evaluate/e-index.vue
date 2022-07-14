<template>
  <v-row>
    <v-col cols="12">
      <v-card>
        <v-subheader class="text-h6">
          <fa :icon="['fas', 'user-doctor']" class="text-h5 mr-2" />
          ข้อมูลทั่วไป
        </v-subheader>

        <v-list two-line>
          <template>
            <v-list-item>
              <v-list-item-avatar color="pink accent-1">
                <v-icon> mdi-folder-multiple-plus-outline </v-icon>
              </v-list-item-avatar>

              <v-list-item-content>
                <v-list-item-title>หัวข้อ - ADL</v-list-item-title>

                <v-list-item-subtitle>
                  คะแนน-แปรผล
                  <v-chip
                    class="ma-2"
                    :color="adl_color_change"
                    text-color="white"
                  >
                    <v-avatar left :class="adl_color_switch_change">
                      {{ adl_total }}
                    </v-avatar>
                    - {{ adl_result }}
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
                <v-list-item-title>หัวข้อ - FRAX-SCORE</v-list-item-title>

                <v-list-item-subtitle>
                  แปรผล
                  <v-chip
                    class="ma-2"
                    :color="frax_score_color_change"
                    text-color="white"
                  >
                    <v-avatar left>
                      <v-icon>mdi-checkbox-marked-circle</v-icon>
                    </v-avatar>
                    {{ frax_score_result }}
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
  name: 'e-adl',
  data() {
    return {
      adl_selects: '',
      adl_total: '',
      adl_result: '',

      frax_score_frax1: '',
      frax_score_frax2: '',
      frax_score_frax3: '',
      frax_score_result: '',
    }
  },
  computed: {
    adl_color_change: function () {
      if (this.adl_total >= 1 && this.adl_total <= 4) return 'red'
      else if (this.adl_total >= 5 && this.adl_total <= 11) return 'orange'
      else if (this.adl_total >= 12) return 'green'
      else if (this.adl_total == 0) return 'gray'
    },
    adl_color_switch_change: function () {
      if (this.adl_total >= 1 && this.adl_total <= 4) return 'red darken-4'
      else if (this.adl_total >= 5 && this.adl_total <= 11)
        return 'orange darken-4'
      else if (this.adl_total >= 12) return 'green darken-4'
      else if (this.adl_total == 0) return 'gray'
    },
    frax_score_color_change: function () {
      if (this.frax_score_result) return 'orange darken-4'
      else return 'gray'
    },
  },

  mounted() {},
  methods: {
    async adlresultdata(value) {
      this.clear_form()
      await axios
        .post(`${this.$axios.defaults.baseURL}Evaluate/e_adl_result.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          this.adl_selects = response.data
          this.adl_total = this.adl_selects[0].total
          this.adl_result = this.adl_selects[0].result
        })
    },
    clear_form() {
      this.adl_total = ''
      this.adl_result = ''
      this.frax_score_result = ''
    },
    fraxscoreresultdata(value) {
      axios
        .post(
          `${this.$axios.defaults.baseURL}Evaluate/e_frax_score_result.php`,
          {
            cid: value[0].cid,
            hn: value[0].hn,
            assessor_date: value[0].assessor_date,
          }
        )
        .then((response) => {
          //alert(JSON.stringify(response.data))
          this.frax_score_selects = response.data
          this.frax_score_frax1 = this.frax_score_selects[0].frax1
          this.frax_score_frax2 = this.frax_score_selects[0].frax2
          this.frax_score_frax3 = this.frax_score_selects[0].frax3
          this.frax_score_result = this.frax_score_selects[0].result
        })
    },
  },
}
</script>

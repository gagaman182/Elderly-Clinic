<template>
  <v-row>
    <v-col cols="12">
      <v-card>
        <v-subheader class="text-h6">
          <fa :icon="['fas', 'brain']" class="text-h5 mr-2" />
          Dementia
        </v-subheader>

        <v-list two-line>
          <template>
            <v-list-item>
              <v-list-item-avatar color="pink accent-1">
                <v-icon> mdi-folder-multiple-plus-outline </v-icon>
              </v-list-item-avatar>

              <v-list-item-content>
                <v-list-item-title>หัวข้อ - Mini Cog</v-list-item-title>

                <v-list-item-subtitle>
                  คะแนน-แปรผล
                  <v-chip
                    class="ma-2"
                    :color="mini_cog_color_change"
                    text-color="white"
                  >
                    <v-avatar left :class="mini_cog_color_switch_change">
                      {{ mini_cog_total }}
                    </v-avatar>
                    - {{ mini_cog_result }}
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
                <v-list-item-title>หัวข้อ - TGDS-15</v-list-item-title>

                <v-list-item-subtitle>
                  คะแนน-แปรผล
                  <v-chip
                    class="ma-2"
                    :color="tgds_color_change"
                    text-color="white"
                  >
                    <v-avatar left :class="tgds_color_switch_change">
                      {{ tgds_total }}
                    </v-avatar>
                    - {{ tgds_result }}
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
                <v-list-item-title>หัวข้อ - TMSE</v-list-item-title>

                <v-list-item-subtitle>
                  คะแนน-แปรผล
                  <v-chip
                    class="ma-2"
                    :color="tmse_color_change"
                    text-color="white"
                  >
                    <v-avatar left :class="tmse_color_switch_change">
                      {{ tmse_total }}
                    </v-avatar>
                    - {{ tmse_result }}
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
                <v-list-item-title>หัวข้อ - MOCA</v-list-item-title>

                <v-list-item-subtitle>
                  คะแนน
                  <v-chip
                    class="ma-2"
                    :color="moca_color_change"
                    text-color="white"
                  >
                    <v-avatar left :class="moca_color_switch_change">
                      {{ moca_total }}
                    </v-avatar>
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
      mini_cog_selects: '',
      mini_cog_total: '',
      mini_cog_result: '',
      tgds_selects: '',
      tgds_total: '',
      tgds_result: '',
      tmse_selects: '',
      tmse_total: '',
      tmse_result: '',
      moca_selects: '',
      moca_total: '',
    }
  },
  computed: {
    mini_cog_color_change: function () {
      if (this.mini_cog_total >= 1 && this.mini_cog_total <= 3) return 'red'
      else if (this.mini_cog_total > 3) return 'green'
      else if (this.mini_cog_total == 0) return 'gray'
    },
    mini_cog_color_switch_change: function () {
      if (this.mini_cog_total >= 1 && this.mini_cog_total <= 3)
        return 'red darken-4'
      else if (this.mini_cog_total > 3) return 'green darken-4'
      else if (this.mini_cog_total == 0) return 'gray'
    },
    tgds_color_change: function () {
      if (this.tgds_total >= 6 && this.tgds_total < 11) return 'red'
      else if (this.tgds_total >= 11) return 'orange'
      else if (this.tgds_total >= 1 && this.tgds_total < 6) return 'green'
      else if (this.tgds_total == 0) return 'gray'
    },
    tgds_color_switch_change: function () {
      if (this.tgds_total >= 6 && this.tgds_total < 11) return 'red darken-4'
      else if (this.tgds_total >= 11) return 'orange darken-4'
      else if (this.tgds_total >= 1 && this.tgds_total < 6)
        return 'green darken-4'
      else if (this.tgds_total == 0) return 'gray'
    },
    tmse_color_change: function () {
      if (this.tmse_total >= 1 && this.tmse_total < 24) return 'red'
      else if (this.tmse_total > 24) return 'green'
      else if (this.tmse_total == 0) return 'gray'
    },
    tmse_color_switch_change: function () {
      if (this.tmse_total >= 1 && this.tmse_total < 24) return 'red darken-4'
      else if (this.tmse_total > 24) return 'green darken-4'
      else if (this.tmse_total == 0) return 'gray'
    },
    moca_color_change: function () {
      if (this.moca_total) return 'blue'
      else if (this.moca_total == 0) return 'gray'
    },
    moca_color_switch_change: function () {
      if (this.moca_total) return 'blue darken-4'
      else if (this.moca_total == 0) return 'gray'
    },
  },

  mounted() {},
  methods: {
    async minicogresultdata(value) {
      this.clear_form()
      await axios
        .post(`${this.$axios.defaults.baseURL}Evaluate/e_mini_cog_result.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          // alert(JSON.stringify(response.data))
          this.mini_cog_selects = response.data
          this.mini_cog_total = this.mini_cog_selects[0].total
          this.mini_cog_result = this.mini_cog_selects[0].result
        })
    },
    async tgdsresultdata(value) {
      this.clear_form()
      await axios
        .post(`${this.$axios.defaults.baseURL}Evaluate/e_tgds_result.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          //alert(JSON.stringify(response.data))
          this.tgds_selects = response.data
          this.tgds_total = this.tgds_selects[0].total
          this.tgds_result = this.tgds_selects[0].result
        })
    },
    async tmseresultdata(value) {
      this.clear_form()
      await axios
        .post(`${this.$axios.defaults.baseURL}Evaluate/e_tmse_result.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          //alert(JSON.stringify(response.data))
          this.tmse_selects = response.data
          this.tmse_total = this.tmse_selects[0].total
          this.tmse_result = this.tmse_selects[0].result
        })
    },
    async mocaresultdata(value) {
      this.clear_form()
      await axios
        .post(`${this.$axios.defaults.baseURL}Evaluate/e_moca_result.php`, {
          cid: value[0].cid,
          hn: value[0].hn,
          assessor_date: value[0].assessor_date,
        })
        .then((response) => {
          //alert(JSON.stringify(response.data))
          this.moca_selects = response.data
          this.moca_total = this.moca_selects[0].moca_all
        })
    },

    clear_form() {
      this.mini_cog_total = ''
      this.mini_cog_result = ''
      this.tgds_total = ''
      this.tgds_result = ''
      this.tmse_total = ''
      this.tmse_result = ''
      this.moca_total = ''
    },
  },
}
</script>

<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title>
            การประเมิน Short physical performance battery (SPPB)
          </v-card-title>

          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            คะแนนรวม 0-3 คะแนนขึ้นไป แปลผล severe limitaiton<br />
            คะแนนรวม 4-6 คะแนนขึ้นไป แปลผล moderate limitation<br />
            คะแนนรวม 7-9 คะแนนขึ้นไป แปลผล mild limtation<br />
            คะแนนรวม 10-12 คะแนนขึ้นไป แปลผล minimal limitation<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- ----1----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">Balance</h3>
              <v-radio-group v-model="sppb1">
                <v-radio
                  label="Side-by-side stand > 10 sceonds"
                  value="1.1"
                ></v-radio>
                <v-radio
                  label="Semi-tandem stand > 10 sceonds"
                  value="1.2"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ sppb1_ok }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----2----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">Tandem stand</h3>
              <v-radio-group v-model="sppb2">
                <v-radio label=">= 10 seconds" value="2"></v-radio>
                <v-radio label="3.00-9.99 seconds" value="1"></v-radio>
                <v-radio label="<= 2.99 seconds" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ sppb2 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----3----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">4m gait speed</h3>
              <v-radio-group v-model="sppb3">
                <v-radio label="Unable to walk" value="0"></v-radio>
                <v-radio label="> 8.70 seconds" value="1"></v-radio>
                <v-radio label="6.21-8.70 seconds" value="2"></v-radio>
                <v-radio label="4.82-6.20 seconds" value="3"></v-radio>
                <v-radio label="< 4.82 seconds" value="4"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ sppb3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----4----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">Chair stands</h3>
              <v-radio-group v-model="sppb4">
                <v-radio
                  label="Unable to perform maneuver or > 60 seconds to complete"
                  value="0"
                ></v-radio>
                <v-radio label=">= 16.70 seconds" value="1"></v-radio>
                <v-radio label="13.70 - 16.69 seconds" value="2"></v-radio>
                <v-radio label="11.20 - 13.69 seconds" value="3"></v-radio>
                <v-radio label="< 11.2 seconds" value="4"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ sppb4 }}</span>
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
              </v-chip>
            </v-col>
          </v-row>

          <v-row>
            <v-col cols="12" md="3"
              ><h3 class="textlabel text-h4 mb-2">ส่งต่อ</h3>
            </v-col>
            <v-col cols="12" md="6">
              <v-chip class="white--text text-h4" color="#FFD124">
                {{ outto }}
              </v-chip>
            </v-col>
          </v-row>

          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_sppb">
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div>
            </v-col>
          </v-row>
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'Sppb',
  data() {
    return {
      sppb1: '',
      sppb2: '',
      sppb3: '',
      sppb4: '',
    }
  },
  computed: {
    sppb1_ok: function () {
      if (this.sppb1 == '1.1' || this.sppb1 == '1.2') return '1'
    },
    total: function () {
      if (!this.sppb1_ok || !this.sppb2 || !this.sppb3 || !this.sppb4) return 0
      return (
        parseInt(this.sppb1_ok) +
        parseInt(this.sppb2) +
        parseInt(this.sppb3) +
        parseInt(this.sppb4)
      )
    },
    result: function () {
      if (this.total >= 1 && this.total <= 3) return 'servere limitaiton'
      else if (this.total >= 4 && this.total <= 6) return 'moderate limitaiton'
      else if (this.total >= 7 && this.total <= 9) return 'mild limitaiton'
      else if (this.total >= 10 && this.total <= 12) return 'minimal limitaiton'
    },
    outto: function () {
      if (this.total >= 1 && this.total <= 3) return 'พบนักกายภาพ'
      else if (this.total >= 4 && this.total <= 12) return 'พบพยาบาล'
    },
  },
  methods: {
    save_sppb() {
      alert('sppb')
    },
  },
}
</script>

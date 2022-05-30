<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> ประวัติการหกล้ม </v-card-title>
          <v-divider />
        </v-card-text>
        <v-card-text>
          <v-row>
            <v-col cols="12" md="12">
              <h3 class="textlabel mb-2 ml-4">
                ใน 6 เดือนที่ผ่านมาเคยหกล้มหรือไม่
              </h3>
              <v-radio-group v-model="adl1" class="ml-8" row>
                <v-radio label="เคยหกล้ม" value="y"> </v-radio>
                <v-radio label="ไม่เคยหกล้ม" value="n"> </v-radio>
              </v-radio-group>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_fall">
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div></v-col
            ></v-row
          >
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'Fall',
  data() {
    return {
      fall: '',
    }
  },
  methods: {
    save_fall() {},
  },
}
</script>
